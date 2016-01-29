@extends('layouts.auth')

@section('content')
     <div class="login-box">

        <div class="login-box-body">
            <div class="login-logo">
                <a href="/"><img src="{{ asset('assets/img/logo_Arcangel.png') }}" alt=""></a>
            </div><!-- /.login-logo -->
            <p class="login-box-msg">Iniciar Sesión</p>
            <form method="POST" action="{{url('auth/login')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="{{ URL::to('social/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Iniciar sesión usando Facebook</a>
                <a href="{{ URL::to('social/google') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Iniciar sesión usando Google+</a>
            </div><!-- /.social-auth-links -->

            <a href="#">Olvidó su contraseña</a><br>
            <a href="register.html" class="text-center">Registrar nuevo usuario</a>

        </div><!-- /.login-box-body -->
    </div>


 <!-- /.login-box -->
@stop

