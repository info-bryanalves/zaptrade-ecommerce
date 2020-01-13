<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $data = [];
        $products = [];
        $result = Product::where('status', '=', 'active')->get();

        foreach ($result as $key => $value) {
            $products[$key] = $value->toArray();
            $products[$key]['author'] = $value->author->toArray();
        }

        $data['products'] = $products;

        return view('pages/products/index', $data);
    }

    public function create()
    {
        $data = [];
        $data['product'] = [];

        return view('pages/products/form', $data);
    }

    public function store(Request $request)
    {
        sessionON();

        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = 'pending';
        $product->created_by = $_SESSION['auth']['id'];

        $product->save();

        if (!empty($request->file('images'))) {
            foreach ($request->file('images') as $file) {
                $picName = $file->getClientOriginalExtension();

                $picName = uniqid() . '.' . $picName;
                $path = '/uploads/products/' . $product->id . '/';
                $destinationPath = public_path($path); // upload path

                $file->move($destinationPath, $picName);
            }

            //Salva a ultima foto com thumbnail
            $product->thumbnail = $path . $picName;

            $product->save();

            return redirect("/products/{$product->id}/photos");
        }

        $_SESSION['info']['type'] = 'product_c';

        return redirect("/administrative");
    }

    public function photos($id)
    {

        $product = Product::find($id);

        $globImages = glob("{$_SERVER['DOCUMENT_ROOT']}/uploads/products/$id/*.*");
        $images = [];

        foreach ($globImages as $key => $value) {
            $images[] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $value);
        }

        return view('pages/products/photos', ['images' => $images, 'id' => $id, 'thumbnail' => $product->thumbnail]);
    }

    public function thumbnail($id, Request $request)
    {
        $product = Product::find($id);

        $product->thumbnail = $request->thumbnail;

        $product->save();

        if ($product->status == 'pending') {

            return redirect('/administrative');
        }

        return redirect('/products');
    }

    public function updatePhotos($id, Request $request)
    {
        $product = Product::find($id);

        if (!empty($request->file('images'))) {
            foreach ($request->file('images') as $file) {
                $picName = $file->getClientOriginalExtension();

                $picName = uniqid() . '.' . $picName;
                $path = '/uploads/products/' . $product->id . '/';
                $destinationPath = public_path($path); // upload path

                $file->move($destinationPath, $picName);
            }

            return redirect("/products/{$product->id}/photos");
        }
    }

    public function edit($id)
    {
        sessionON();

        $product = Product::find($id)->toArray();

        if ($_SESSION['auth']['occupation'] !== 'manager' && $_SESSION['auth']['id'] !== $product['created_by']) {

            $_SESSION['error']['type'] = 'permission';

            return redirect('/products');
        }

        $data = [];
        $data['type'] = 'edit';
        $data['product'] = $product;

        return view('pages/products/form', $data);
    }

    public function update($id, Request $request)
    {

        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        $_SESSION['info']['type'] = 'product_u';

        return redirect('/products');
    }

    public function destroy($id)
    {
        sessionON();

        $product = Product::find($id);

        if ($_SESSION['auth']['occupation'] !== 'manager' && $_SESSION['auth']['id'] !== $product->created_by) {

            $_SESSION['error']['type'] = 'permission';

            return redirect('/products');
        }

        $_SESSION['info']['type'] = 'product_d';

        $product->delete();

        return redirect('/products');
    }
}