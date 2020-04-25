<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
        
        //Validar datos
        $messages = [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'el nombre ha de tener almenos 3 carácteres!',
            'description.required' => 'La descripción es requerida!',
            'description.min' => 'La descripción ha de tener almenos 10 carácteres!',
            'price.required' => 'El precio es requerido!',
            'price.numeric' => 'El precio ha de ser numérico!',
            'price.min' => 'El precio ha de ser maoyor que cero!'
        ];

        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:10',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);

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

    
        public function edit($id){
            $product = Product::find($id);
            return view('admin.products.edit')->with(compact('product'));//Formulario
        }
    
        public function update(Request $request, $id){
           
            //Validar datos
            $messages = [
                'name.required' => 'El nombre es requerido',
                'name.min' => 'el nombre ha de tener almenos 3 carácteres!',
                'description.required' => 'La descripción es requerida!',
                'description.min' => 'La descripción ha de tener almenos 10 carácteres!',
                'price.required' => 'El precio es requerido!',
                'price.numeric' => 'El precio ha de ser numérico!',
                'price.min' => 'El precio ha de ser maoyor que cero!'
            ];

            $rules = [
                'name' => 'required|min:3',
                'description' => 'required|min:10',
                'price' => 'required|numeric|min:0'
            ];
            $this->validate($request, $rules, $messages);

            
            //Registrar nuevo producto
    
            $product = Product::find($id);

            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->long_description = $request->input('long_description'); 
    
            $product->save();//Insert
    
            return redirect('/admin/products');
        }

        public function destroy($id){
            //Eliminar producto
    
            $product = Product::find($id);
            $product->delete();//Insert
    
            return back();//redirect('/admin/products');
        }
    
   }
