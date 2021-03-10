<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
//        $data = [
//            'productOne' => 'iPhone',
//            'productTwo' => 'Samsung',
//        ];
//
//        //Directly in the view
//        return view('products.index', [
//            'data' => $data
//        ]);
            //Using route naming
            return view('products.index');
    }

    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung',
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' doesn\'t exist'
        ]);
    }
}
