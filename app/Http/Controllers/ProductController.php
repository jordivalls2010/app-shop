<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::paginate(10);

        return view('admin.products.index')->with(compact('products'));//Listado
    }

    public function create(){
        return view('admin.products.create');//Formulario
    }

    public function store(Request $request){
        //Registrar nuevo producto

        //dd($request->all());
        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description'); 

        $product->save();//Insert

        return redirect('/admin/products');
    }
}
