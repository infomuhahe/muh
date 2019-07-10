@extends('frontEnd.layouts.master')
@section('title','My Account Page')
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
                <div class="col-md-3">
                        @include('users.sidebar')
                </div>
            <div class="col-md-9">
                    <div class="box">
                   
                        <h1 align="center"> Edit Your Account </h1>

                        <form action="{{url('/update-profile',$user_login->id)}}" method="post" enctype="multipart/form-data"><!-- form Begin -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{method_field('PUT')}}
                            <div class="form-group {{$errors->has('name')?'has-error':''}}"><!-- form-group Begin -->
                
                                <label> Costumer Name: </label>
                
                                <input type="text" name="name" class="form-control" value="{{$user_login->name}}" id="name" required>
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                            </div><!-- form-group Finish -->
           
                            <div class="form-group {{$errors->has('address')?'has-error':''}}"><!-- form-group Begin -->
                
                                <label> Customer Address: </label>
                
                                <input type="text"class="form-control" value="{{$user_login->address}}" name="address" id="address" required>
                                 <span class="text-danger">{{$errors->first('address')}}</span>
                
                            </div><!-- form-group Finish -->
            
                            <div class="form-group {{$errors->has('city')?'has-error':''}}"><!-- form-group Begin -->
                
                                <label> Customer City: </label>
                
                                <input type="text" class="form-control" name="city" value="{{$user_login->city}}" id="city" required>
                                    <span class="text-danger">{{$errors->first('city')}}</span>
                            </div><!-- form-group Finish -->
            
            
                            <div class="form-group {{$errors->has('state')?'has-error':''}}"><!-- form-group Begin -->
                
                                <label> Customer State </label>
                
                                <input type="text" class="form-control" name="state" value="{{$user_login->state}}" id="state" required>
                                <span class="text-danger">{{$errors->first('state')}}</span>
                            </div><!-- form-group Finish -->
            
                            <div class="form-group"><!-- form-group Begin -->
                
                                <label> Costumer Country: </label>
                
                                <select name="country" id="country" class="form-control">
                                        @foreach($countries as $country)
                                            <option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                
                            </div><!-- form-group Finish -->

                            <div class="form-group {{$errors->has('mobile')?'has-error':''}}"><!-- form-group Begin -->
                
                                <label> Customer Contact: </label>
                
                                <input type="text" class="form-control" name="mobile" value="{{$user_login->mobile}}" id="mobile" required>
                                    <span class="text-danger">{{$errors->first('mobile')}}</span>
                            </div><!-- form-group Finish -->
 
                            <div class="text-center"><!-- text-center Begin -->
                
                                <button type="submit" name="update" class="btn btn-primary"><!-- btn btn-primary Begin -->
                    
                                    <i class="fa fa-user-md"></i> Update Now
                    
                                </button><!-- btn btn-primary inish -->
                
                            </div><!-- text-center Finish -->
            
                        </form><!-- form Finish -->
                 </div>
            </div>
        </div>
		
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
		