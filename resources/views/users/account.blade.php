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
                
             </div>
           
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection