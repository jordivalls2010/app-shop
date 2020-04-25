@extends('layouts.app')

@section('title','App Shop | Dashboard')

@section('body_class','profile-page')

@section('content')


@section('styles');
    <style>
        .rounded {
            height: 100px;
            width: 100px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            background:url("http://www.electricvelocity.com.au/Upload/Blogs/smart-e-bike-side_2.jpg") center no-repeat;
            background-size:cover;
        }
    </style>
@endsection

<div class="header header-filter" style="background-image: url('/img/examples/city.jpg');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <div class="avatar">
                    <img src="{{ $product->featured_image_url }}" alt="Circle Image" class="rounded img-responsive img-raised">
                    </div>
                    <div class="name">
                        <h3 class="title">{{ $product->name }}</h3>
                        <h6>{{ $product->category->name }}</h6>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <p>
                    {{ $product->long_description}}
                </p>
            </div>

            <div class="text-center">
                <button class="btn btn-primary btn-round"  data-toggle="modal" data-target="#modelAddToCard">
                    <i class="material-icons">add</i> Añadir al carrito de compras
                </button>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="profile-tabs">
                        <div class="nav-align-center">
                            <!--
                            <ul class="nav nav-pills" role="tablist">
                                <li class="active">
                                    <a href="#studio" role="tab" data-toggle="tab">
                                        <i class="material-icons">camera</i>
                                        Studio
                                    </a>
                                </li>
                                <li>
                                    <a href="#work" role="tab" data-toggle="tab">
                                        <i class="material-icons">palette</i>
                                        Work
                                    </a>
                                </li>
                                <li>
                                    <a href="#shows" role="tab" data-toggle="tab">
                                        <i class="material-icons">favorite</i>
                                        Favorite
                                    </a>
                                </li>
                            </ul>
                            -->

                            <div class="tab-content gallery">
                                <div class="tab-pane active" id="studio">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @foreach ($imagesLeft as $image)
                                            <img src="{{ $image->url }}" class="img-rounded"/>
                                            @endforeach
                                        </div>
                                        <div class="col-md-6">
                                            @foreach ($imagesRight as $image)
                                            <img src="{{ $image->url }}" class="img-rounded"/>                                            
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- End Profile Tabs -->
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Core -->
<div class="modal fade" id="modelAddToCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Seleccione la cantidad que desea agregar</h4>
        </div>
        <form method="post" action="">
            @csrf_field()
            <div class="modal-body">
                <input type="number" name="quantity" value="0" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-info btn-simple">Añadir al carrito</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@include('includes.footer')
@endsection
