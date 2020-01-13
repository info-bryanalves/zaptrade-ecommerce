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
        sessionON();

        $product = Product::find($id);

        if ($_SESSION['auth']['occupation'] !== 'manager' && $_SESSION['auth']['id'] !== $product->create_by) {

            $_SESSION['error']['type'] = 'permission';

            return redirect('/products');
        }

        $_SESSION['info']['type'] = 'product_d';

        $product->delete();

        return redirect('/products');
    }
}
