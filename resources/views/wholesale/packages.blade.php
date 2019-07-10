@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper"><!-- #wrapper begin -->
    @include('wholesale.inc.sidebar')
            <div class="container-fluid"><!-- container-fluid begin -->
            <div class="backgroundpackages">
            <img src="{{asset('frontEnd/imagepackages/backPackages.png')}}" class="share img-responsive"  alt="" />

            </div>
              <h5 class="packageh ">Choose your Package</h5>
            </div><!-- container-fluid finish -->
            <div class="flex-container">
              <div class="package">
                <h5 class="package_header">Starter store fees</h5>
                <p>5 Products</p>
                <P>3 Months</P>
                <p><b>Amount:</b> 30$</p>
                <button type="button" class="btn btn-primary">Buy</button>
              </div>
              <div class="package">
                <h5 class="package_header">Advance store fees</h5>
                <p>10 Products</p>
                <P>6 Months</P>
                <p><b>Amount:</b> 50$</p>
                <button type="button" class="btn btn-primary">Buy</button>
            </div>
            <div class="package">
                <h5 class="package_header">Premium store fees</h5>
                <p>20 Products</p>
                <P>1 Year</P>
                <p><b>Amount:</b> 100$</p>
                <button type="button" class="btn btn-primary">Buy</button>
            </div>
            <div class="package">
                <h5 class="package_header">Protrade store fees</h5>
                <p>100 Products</p>
                <P>1 Year</P>
                <p><b>Amount:</b> 300$</p>
                <button type="button" class="btn btn-primary">Buy</button>
            </div>


           </div>
    </div><!-- wrapper finish -->
@endsection


