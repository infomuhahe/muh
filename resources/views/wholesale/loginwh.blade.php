@extends('frontEnd.layouts.master')
@section('title','Login Register Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-4" >

            </div>

            <div class="col-sm-4">
                <div class="login-form"><!--login form-->
                    <h2><strong>Login to your account</strong></h2>
                    <form action="{{url('/login_wholesale')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Password" name="password"/>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Keep me signed in
                        </span>
                        <!-- <p>Already have an account?<a href="/register_wholesale">Sign up</a></p> -->
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div style="margin-bottom: 20px;"></div>
    </div>

@endsection
