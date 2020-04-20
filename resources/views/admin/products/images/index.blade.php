@extends('layouts.app')

@section('title','Imágenes de productos')

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
            <h2 class="title">Imágenes del producto seleccionado</h2>

            <form method="post" action="">
                {{ csrf_field() }}

                <input type="file" name="photo" required>
                <button type="submit" class="btn btn-primary btn-round">Subir nueva imagen</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round">Volver al listado de productos</a>
            </form>
            <hr noshade="true">
            <div class="row">
                @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="panel panel-default">
                    
                        <div class="panel-body">
                        
                            <img src="{{ $image->image }}" width="50%">
                            <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>
        
                        </div>
                    
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>

</div>

@include('includes.footer')


@endsection
