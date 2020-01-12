<?php

namespace App\Http\Controllers;

use App\Product;

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

    public function destroy($id)
    {

        $employee = Product::find($id);

        $employee->delete();

        return redirect('/products');
    }
}
