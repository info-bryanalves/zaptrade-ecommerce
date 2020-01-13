<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index()
    {
        $data = [];

        $data['products'] = Product::where('status', '=', 'active')->get();

        foreach ($data['products'] as $key => $value) {
            $data['products'][$key]['price'] = brazilianFormatMoney($value['price']);
        }

        return view('pages/catalog/index', $data);
    }

    public function show($id)
    {
        $data = [];

        $data['product'] = Product::where([
            ['id', '=', $id],
            ['status', '=', 'active'],
        ])->first();

        return view('pages/catalog/details', $data);
    }

    public function update($id, Request $request)
    {
        sessionON();

        $product = Product::find($id);

        $product->status = $request->action;

        $product->save();

        $_SESSION['info']['type'] = $request->action;

        return redirect('/products');
    }
    //
}
