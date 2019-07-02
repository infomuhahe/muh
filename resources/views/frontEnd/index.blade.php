@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>

        <!-- Women Clothes Slidder -->
        <div class="post-slider">
                <h1 class="slider-title">Feature Products</h1>
    
                <i class="fa fa-chevron-left prev"></i>
                <i class="fa fa-chevron-right next"></i>
                
                <div class="post-wrapper">
                    @foreach ($products as $product)
                        @if($product->category->status==1)
                        <div class='post'>
                                <a href="{{url('/product-detail',$product->id)}}">
                                    <img src="{{url('products/small/',$product->image)}}" alt='Feature products' class='slider-image'>
                                </a>
                                <div class='text'>
                                    <p class='button'>   
                                    <a class='btn btn-default' href="{{url('/product-detail',$product->id)}}">
                                        View Details
                                    </a>
                                    </p>
                                </div>         
                            </div>
                        @endif  
                    @endforeach
                </div>
            </div>
            <!--End Horizontal Coursel for women clothes product -->


        <div class="container">
            <div class="row">
                <div class="col-sm-12 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        <h2>{{$product->price}} Rwf</h2>
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>
@endsection