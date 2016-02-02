@extends('layouts.auth')

@section('content')
    <div class="register-box">


        <div class="register-box-body">


            <div class="register-logo">
                <a href="/"><img src="{{ asset('assets/img/logo_Arcangel.png') }}" alt=""></a>
            </div>
            <p class="login-box-msg">Registarse</p>

            <form  method="post" action="{{url('auth/register')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>


                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>


                <div class="form-group has-feedback">
                    <input type="password"  name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>


                <div class="form-group has-feedback">
                    <input type="password" name="password_confirmation"  class="form-control" placeholder="Retype password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            @if($errors->any())
                <div>
                    <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="text-info">
                @if(Session::has('message'))
                    {{Session::get('message')}}
                @endif
            </div>
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="{{ URL::to('social/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                    Facebook</a>
                <a href="{{ URL::to('social/google') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                    Google+</a>
            </div>

            <a href="{{ URL::to('auth/login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>

@stop