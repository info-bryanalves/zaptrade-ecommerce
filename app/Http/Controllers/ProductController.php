<?php

namespace App\Http\Controllers;

use App\Products;

class ProductController extends Controller
{

    public function index()
    {
        $data = [];

        $data['products'] = Products::where('status', '=', 'active')->get();

        return view('pages/store/index', $data);
    }

    public function show($id)
    {
        $data = [];

        $data['product'] = Products::where([
            ['id', '=', $id],
            ['status', '=', 'active']
        ])->first();

        return view('pages/store/details', $data);
    }
    //
}
