@extends('frontEnd.layouts.master')
@section('title','List Products')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <?php
                            if($byCate!=""){
                                $products=$list_product;
                                echo '<h2 class="title text-center">Category '.$byCate->name.'</h2>';
                            }else{
                                echo '<h2 class="title text-center">List Products</h2>';
                            }
                    ?>
                    <!--End Horizontal Coursel for women clothes product -->

        {{-- Featured product container --}}
        <div id="content" class="container"><!-- container Begin -->
       
            <div class="row"><!-- row Begin -->
               
               {{-- Start --}}
               @foreach ($products as $product)
                   @if ($product->category->status==1)
                   <div class='col-md-4 col-sm-6 single'>
                        <div class='product'>
                        <a href="{{url('/product-detail', $product->id)}}">  
                        <img class='img-responsive' src="{{url('products/small/', $product->image)}}" alt="Muhahe.com Products">  
                            </a>  
                            <div class='text'>
                                <h3>
                                <a href="{{url('/product-detail', $product->id)}}">
                                        {{$product->p_name}}
                                    </a>
                                </h3>
                                <p class='price'>
                                    {{$product->price}} FRW
                                </p>
                                <p class='button'>
                                <a class='btn btn-default' href="{{url('/product-detail', $product->id)}}">
                                        View Details
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                   @endif
               @endforeach
               
                
            </div><!-- row Finish -->
            
        </div><!-- container Finish -->

                </div><!--features_items-->
            </div>
        </div>
    </div>
@endsection