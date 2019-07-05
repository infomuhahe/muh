{{-- headerfile!!!!!!!!!!!!!!!! --}}

 <header id="header"><!--header-->
 	<div class="header_top"><!--header_top-->
 		<div class="navh container">
 			<div class="row">
 				<div class="col-sm-4 ">
 						<div class="contactinfo pull-right ">
 								<ul class=" nav nav-pills">
 									<li><a href="/wholesale">Wholesale</a></li>
 									<li ><a href="#" >Affiliate</a></li>
 										<li ><a href="#">Events</a></li>
 										<li ><a href="#">News</a></li>
 									</ul>
 								</div>
 				</div>
 				<div class="col-sm-5"></div>
 				<div class="col-sm-3">
 						<div class="btn-group pull-right">
 								<div class="btn-group">
 									<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
 										LANGUAGE
 										<span class="caret"></span>
 									</button>
 									<ul class="dropdown-menu">
 										<li><a href="#">ENGLISH</a></li>
 										<li><a href="#">FRANCE</a></li>
 										<li><a href="#">SWAHILI</a></li>
 									</ul>
 								</div>
                        
 								<div class="btn-group">
 									<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
 										CURRENCY
 										<span class="caret"></span>
 									</button>
 									<ul class="dropdown-menu">										<li><a href="#">RWF</a></li>
 										<li><a href="#">DOLLAR</a></li>
 										<li><a href="#">POUND</a></li>
 										<li><a href="#">BITCOIN</a></li>
 										<li><a href="#">DAGCOIN</a></li>
 										<li><a href="#">ETHEREUM</a></li>
 									</ul>
 								</div>
 							</div>
 				</div>
 			</div>
 		</div>
 	</div><!--/header_top-->

 	<div class="header-middle"><!--header-middle-->
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-2">
 					<div class="logo pull-left">
 						<a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/1ecom-store-logo.png')}}" alt="" /></a>
 					</div>
 
 				</div>
 				<div class="col-lg-4">
 						<form class="form-inline my-2 my-lg-0">
 								<input class="form-control mr-sm-2" type="search" style="width:260px;" placeholder="Search" aria-label="Search">
 								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 							</form>
 						</div> 
 						<div class="col-lg-6">
 								<div class="shop-menu pull-right">
 									<ul class="nav navbar-nav">
 										<li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
 										@if(Auth::check())
 											<li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
 											<li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
 											</li>
 										@else
 											<li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
 										@endif
 										<li>
 											<a href="{{url('/login_page')}}"><i class="fa fa-user"></i> Register</a>
 										</li>
 									</ul>
 								</div>
 							</div>      
 				</div>
 
 			</div>
 		</div>
 	</div><!--/header-middle-->

 	<div class="header-bottom"><!--header-bottom-->
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-9">
 					<div class="navbar-header">
 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
 							<span class="sr-only">Toggle navigation</span>
 							<span class="icon-bar"></span>
 							<span class="icon-bar"></span>
 							<span class="icon-bar"></span>
 						</button>
 					</div>
 					<div class="mainmenu pull-left">
 						<ul class="nav navbar-nav collapse navbar-collapse">
 							<li><a href="{{url('/')}}" class="active">Home</a></li>
 							<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
 								<ul role="menu" class="sub-menu">
 									<li><a href="{{url('/list-products')}}">Products</a></li>
 									<li><a href="{{url('/myaccount')}}">Account</a></li>
 									<li><a href="{{url('/viewcart')}}">Cart</a></li>
 								</ul>
 							</li>
 							<li class="dropdown"><a href="#">Categories<i class="fa fa-angle-down"></i></a>
 								<?php
 								$categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
 								?>
 								<ul role="menu" class="sub-menu">
 										@foreach($categories as $category)
 										<?php
 											$sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get() 										?>
 									<li>
 											<a data-toggle="collapse" data-parent="#accordian" href="#sportswear{{$category->id}}">
 													@if(count($sub_categories)>0)
 														<span class="badge pull-right"><i class="fa fa-plus"></i></span>
 													@endif
 												</a>
 													<a href="{{route('cats',$category->id)}}">{{$category->name}}</a>
                        
 									</li>
 									@if(count($sub_categories)>0)
 									<li> 
 										<div id="sportswear{{$category->id}}" class="panel-collapse collapse">
 											<div class="panel-body">
 												<ul>
 													@foreach($sub_categories as $sub_category)
 														<li><a href="{{route('cats',$sub_category->id)}}">{{$sub_category->name}} </a></li>
 													@endforeach
 												</ul>
 											</div>
 										</div>
 									</li>
 									@endif
 									@endforeach
 								</ul>
 							</li>
                                 
 							<li><a href="" target="_blank">Contact</a></li>
 						</ul>
 					</div>
 				</div>
 				<div class="col-sm-3">
                   
 				</div>

 			</div>
 		</div>
 	</div><!--/header-bottom-->
 </header><!--/header-->


{{-- end of headerfile!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --}}
