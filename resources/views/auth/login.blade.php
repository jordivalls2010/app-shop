@extends('layouts.app')

@section('body-class','signup-page');

@section('content')
    <div class="header header-filter" style="background-image: url('{{asset('/img/city.jpg')}}'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="header header-primary text-center">
                                <h4>Inicio de sesión</h4>
                                <div class="social-line">
                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="text-divider">Introduce tus datos</p>
                            <div class="content">


                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <input id="email" type="email" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required autofocus>

                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <input id="password" type="password" class="form-control" placeholder="Password..."  name="password" required>
                                </div>

                                <!-- If you want to add a checkbox to this form, uncomment this code-->

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Recordar sesión
                                    </label>
                                </div> 
                            </div>
                            <div class="footer text-center">
                                <button type="submit"  class="btn btn-simple btn-primary btn-lg">Login</button>
                            </div>

                            <!--
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            -->

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                            About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                            Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2016, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
@endsection
