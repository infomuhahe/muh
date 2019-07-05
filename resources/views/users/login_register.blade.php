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
            <div class="col-sm-5" >
                <div class="login-form"><!--login form-->
                    <h2><strong>Login to your account</strong></h2>
                    <form action="{{url('/user_login')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Password" name="password"/>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <h4><strong>New User Signup!</strong></h4>
                <form action="{{url('/register_user')}}" method="post" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" value="{{old('name')}}">
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" name="email" value="{{old('email')}}">
                        <span class="text-danger">{{$errors->first('email')}}</span>   
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{old('password')}}">
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}">
                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkBox">
                        <label class="form-check-label" for="exampleCheck1">Accept</label>
                        <a href="{{ url('/condi') }}"> Terms and Conditions</a>
                    </div>
                    <div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Captcha</label>
                            {!! captcha_image_html('ContactCaptcha') !!}
                            <input class="form-control" type="text" id="CaptchaCode" name="CaptchaCode">


                            @if ($errors->has('CaptchaCode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('CaptchaCode') }}</strong>
                                </span>
                            @endif 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
        <div style="margin-bottom: 20px;"></div>
    </div>
    
@endsection