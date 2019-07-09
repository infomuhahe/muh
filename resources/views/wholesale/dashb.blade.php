@extends('wholesale.layouts.master2')
@section('content')

<div id="wrapper">

    @include('wholesale.inc.sidebar')

            <div class="container-fluid">
                <div class="row row2">
                    <div class="divdash col-md-6">
                        <h3>firs div with muhahe logo or picture</h3>
                    </div>
                    <div class="divdash col-md-6">
                        <h5 class="headerdash">Want to sell on muhahe?</h3>
                        <p>Get your Products discovered by our community and make more sales. Create your own online
                            Store and start selling today!
                        </p>
                        <a href="#" class="pluslink"><div>
                            <p class="plus">+ Open new Store</p>
                        </div></a>
                    </div>
                </div>
                <div class="same-height-row"><!-- same-height-row Begin -->
                   <a href="/GetStarted"><div class="boxdash col-sm-4"><!-- col-sm-4 Begin -->
                        <div class="box same-height"><!-- box same-height Begin -->
                                <h4>Get Started </h4>
                                    <p>Open a new store and start selling your products</p>
                        </div><!-- box same-height Finish -->
                    </div></a> <!-- col-sm-4 Finish -->
                    <a href="/basics"><div class="boxdash col-sm-4"><!-- col-sm-4 Begin -->
                    <div class="box same-height"><!-- box same-height Begin -->
                            <h4>Basics </h4>
                                <p>Open a new store and start selling your products</p>
                    </div><!-- box same-height Finish -->
                </div></a><!-- col-sm-4 Finish -->
                <a href="/successStories"><div class="boxdash col-sm-4"><!-- col-sm-4 Begin -->
                    <div class="box same-height"><!-- box same-height Begin -->
                            <h4>Success Stories</h4>
                                <p>Open a new store and start selling your products</p>
                    </div><!-- box same-height Finish -->
                </div></a>
                <a href="/tools"><div class="boxdash col-sm-4"><!-- col-sm-4 Begin -->
                    <div class="box same-height"><!-- box same-height Begin -->
                            <h4>Tools</h4>
                                <p>Open a new store and start selling your products</p>
                    </div><!-- box same-height Finish -->
                </div></a>
             </div><!-- same-height-row Finish -->
            </div>
        </div>
@endsection



