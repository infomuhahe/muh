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
                <form action="{{url('/register_wholesale')}}" method="post" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Full Name" name="name" value="{{old('name')}}">
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" value="{{old('email')}}">
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number" name="phone" value="{{old('phone')}}">
                        <span class="text-danger">{{$errors->first('phone')}}</span>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company Name" name="companyname" value="{{old('companyname')}}">
                        <span class="text-danger">{{$errors->first('companynane')}}</span>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Country" name="country" value="{{old('country')}}">
                        <span class="text-danger">{{$errors->first('country')}}</span>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address" name="address" value="{{old('address')}}">
                        <span class="text-danger">{{$errors->first('address')}}</span>
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

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div style="margin-bottom: 20px;"></div>
    </div>

@endsection
