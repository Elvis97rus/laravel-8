<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Welcome to my Index Products page";
        $description = "Created by ArtemSh";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung',
        ];

        //Compact method
//        return view('products.index',
//            compact('title', 'description')
//        );

        //With method
//        return view('products.index')->with('title', $title);
//        return view('products.index')->with('data', $data);

        //Directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }
}
