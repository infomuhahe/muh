@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper"><!-- #wrapper begin -->

    @include('wholesale.inc.sidebar')


            <div class="container-fluid"><!-- container-fluid begin -->
                <div class="row1">
                    <p class="p1">Tools</p>
                    <p> Tell the users about most of your store</p>
                </div>
            <div class="row4">
                <div>
                    <h4>1.Products</h4>
                     <p>Create products  in your store with attractive pricing, discounts, photos etc
                    </p>
                </div>
                <div>
                <img src="{{asset('frontEnd/imagepackages/disc2.jpeg')}}" class="share img-responsive"  alt="" />

                </div>
                <div>
                <img src="{{asset('frontEnd/imagepackages/photo.jpeg')}}" class="share img-responsive"  alt="" />

                </div>
                <div>
                    <h4> 2. Photos </h4>
                    <p>Upload attractive photos to attract more and more customers to your store.</p>
                </div>
                <div>
                    <h4>3. Offers</h4>
                    <p>Offer great discounts on your store to attract more users and increase your sales.</p>
                </div>
                <div>
                <img src="{{asset('frontEnd/imagepackages/discount20.jpeg')}}" class="share img-responsive"  alt="" />

                </div>
                <div>
                <img src="{{asset('frontEnd/imagepackages/form.jpg')}}" class="share img-responsive"  alt="" />
                </div>
                <div>
                    <h4> 4. Form </h4>
                    <p>Gather feedback about your store to know what more your users want from your store,
                     what problems the have, etc</p>
                </div>
                </div>
            </div><!-- container-fluid finish -->
    </div><!-- wrapper finish -->
@endsection


