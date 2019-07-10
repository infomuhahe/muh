@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper"><!-- #wrapper begin -->

    @include('wholesale.inc.sidebar')


            <div class="container-fluid"><!-- container-fluid begin -->
                <div class="row1">
                    <p class="p1">Open your new store and start accepting ONE</p>
                    <p> 3 easy steps in how to get started</p>
                </div>
            <div class="row row2">
                    <div class="divdash col-md-6">
                        <h4>1. Choose a free or featured package</h4>
                        <p>Choose a package that best suits your requirements.For a small advertising fee you
                            can get your store and products listed in top of most pages as wwell listed in
                            search results and in wall feeds throughout the page.
                        </p>
                    </div>
                    <div class="divdash col-md-6">
                               missed image
                    </div>
                </div>
                <div class="row row2">
                    <div class="divdash col-md-6">
                    missed image
                    </div>
                    <div class="divdash col-md-6">
                        <h4> 2. Create a new store </h4>
                        <p>Configure your store based on the package you have. Make sure you make
                            the store look awesome and stand out. Great images is a good way to start showing.
                        </p>
                    </div>
                </div>
                <div class="row row2">
                    <div class="divdash col-md-6">
                        <h4>3. Get Started</h4>
                        <p>Tell users about most of your store,products.Make sure you share you store throughout
                            the web and refer friends to come check it out .
                        </p>
                    </div>
                    <div class="divdash col-md-6">
                    <img src="{{asset('frontEnd/imagepackages/shopping-center-clipart-1.jpg')}}" class="share img-responsive"  alt="" />

                    </div>
                </div>
            </div><!-- container-fluid finish -->
    </div><!-- wrapper finish -->
@endsection


