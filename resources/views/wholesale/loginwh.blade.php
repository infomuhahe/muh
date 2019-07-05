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
            <div class="col-sm-3" >
               
            </div>
            
            <div class="col-sm-6">
                <h4><strong>Welcome to Wholesale Page</strong></h4>
                <form action="{{url('/login_wholesale')}}" method="post" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    
                            <input type="email" placeholder="Email" name="email"/>
                            <input type="password" placeholder="Password" name="password"/>
                            <span>
                                <input type="checkbox" class="checkbox">
                                Keep me signed in
                            </span>
                            <button type="submit" class="btn btn-default">Login</button>
                     
                    <p>Already have an account?<a href="#">Sign in</a></p>
                    </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div style="margin-bottom: 20px;"></div>
    </div>
    
@endsection