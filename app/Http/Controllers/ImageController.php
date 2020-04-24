<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImages;
use File;

class ImageController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $images = $product->images;
        return view('admin.products.images.index')->with(compact('product','images'));
    }
    public function store(Request $request, $id){
        //Guarar im
        $file = $request->file('photo');
        $path = public_path() . "/images/products";
        $filename = uniqid() . $file->getClientOriginalName();
        $moved = $file->move($path,$filename);   

        //crear 1 reg en la tabla img
        if ($moved){
            
            $productImage = new ProductImages();
            $productImage->image = $filename;
            //$productImage->featured = false;
            $productImage->product_id = $id;
            $productImage->save();
        }
        return back();
    }

    public function destroy(Request $request,$id){
        //eliminar el archivo
        $productImage = ProductImages::find($request->image_id);
        if (substr($productImage->image,0,4) === "http" ) {
            $deleted = true;
        } else {
            $fullPath = public_path() . '/images/products/' . $productImage->image;
            $deleted = File::delete($fullPath);
        }
                
        //eliminar el registro
        if ($deleted){
            $productImage->delete();
        }

        return back();
    }
}
