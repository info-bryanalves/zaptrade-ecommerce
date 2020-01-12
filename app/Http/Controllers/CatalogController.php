<?php

namespace App\Http\Controllers;

use App\Product;

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
    //
}
