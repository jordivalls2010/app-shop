@extends('layouts.app')

@section('title','Listado de productos')

@section('body_class','product-page')

@section('content')

<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    <div class="container">
        <!--<div class="row">   
            <div class="col-md-6">
                <h1 class="title">Bienvenido a App Shop, Soy la JV!</h1>
                <h4>Realiza pedidos en línea y te contactaremos para coordinar la entrega</h4>
                <br />
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Cómo funciona?
                </a>
            </div>
        </div>-->
    </div>
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Listado de productos</h2>
            
            <div class="team">
                <div class="row">
                <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round">Nuevo producto</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2">Nombre</th>
                                <th class="col-md-5">Descripción</th>
                                <th>Categoria</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="text-center active">{{$product->id}}</td>
                                    <td class="text-left">{{$product->name}}</td>
                                    <td class="text-left">{{$product->description}}</td>
                                    <td class="text-left">{{$product->category ? $product->category->name : 'General'}}</td>
                                    <td class="text- active">&euro; {{$product->price}}</td>
                                    <td class="td-actions text-center">
                                        
                                        <form method="post" action="{{ url('/admin/products/'.$product->id)}}" name="delete_product">
                                            {{ csrf_field() }} 
                                            {{ method_field('DELETE')}}
                                            
                                            <a href="" type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="{{ url('/admin/products/'.$product->id.'/edit')}}" type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ url('/admin/products/'.$product->id.'/images')}}" type="button" rel="tooltip" title="Product images" class="btn btn-warning btn-simple btn-xs">
                                                <i class="fa fa-image"></i> 
                                            </a>
                                            <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>    


                            @endforeach
                        </tbody>
                    </table>

                    {{$products->links()}}
                </div>
            </div>

        </div>


    </div>

</div>

@include('includes.footer')


@endsection
