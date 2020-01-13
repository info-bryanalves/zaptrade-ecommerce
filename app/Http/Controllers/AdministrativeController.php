<?php

namespace App\Http\Controllers;

use App\Product;

class AdministrativeController extends Controller
{

    public function index()
    {
        sessionON();

        if ($_SESSION['auth']['occupation'] == 'manager') {

            $products = Product::where('status', 'pending')->get();

            return view('pages/administrative/manager', ['products' => $products]);
        }

        $where = [
            ['status', 'pending'],
            ['created_by' ,$_SESSION['auth']['id']]
        ];

        $products = Product::where($where)->get();

        return view('pages/administrative/salesman',  ['products' => $products]);
    }
    //
}
