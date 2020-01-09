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

        $data['products'] = [Products::find($id)];

        return view('pages/store/details', $data);
    }
    //
}
