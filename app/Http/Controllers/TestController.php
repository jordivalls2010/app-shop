<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImages;

class TestController extends Controller
{
    public function welcome(){
        
        $products = Product::all();
        //$products_images = ProductImages::Product();
        
        return view('welcome')->with(compact('products'));

    }
}
