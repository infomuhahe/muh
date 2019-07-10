@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper"><!-- #wrapper begin -->

    @include('wholesale.inc.sidebar')


            <div class="container-fluid"><!-- container-fluid begin -->
                <div class="row1">
                    <p class="p1">Basics Page</p>
                    <p> Learn how to attract users and maximize uor sites</p>
                </div>
            <div class="row row2">
                    <div class="divdash col-md-6">
                        <h4>1. Create products </h4>
                        <p>Create products with attractive and comptetetive prices that your customer
                            base want to get their hands on. Other free shipping and handeling to attract maximum
                            users
                        </p>
                    </div>
                    <div class="divdash col-md-6">
                    <img src="{{asset('frontEnd/imagepackages/discount.jpeg')}}" class="share img-responsive"  alt="" />

                </div>
                </div>
                <div class="row row2">
                    <div class="divdash col-md-6">
                        <h4>2. Upload stunning and attractive photos</h4>
                        <p>Stunning and attractive photos about your products will bring users faith in quality
                            and the willingness to buy from you.
                        </p>
                    </div>
                    <div class="divdash col-md-6">
                    <img src="{{url('products/small/')}}">
                    </div>
                </div>
            </div><!-- container-fluid finish -->
    </div><!-- wrapper finish -->
@endsection


