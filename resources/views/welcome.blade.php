<div class="col-sm-4 col-sm-offset-1">
	<div class="login-form"><!--login form-->
		<form action="{{url('/update-profile',$user_login->id)}}" method="post" class="form-horizontal">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{method_field('PUT')}}
			<legend>Account Profile</legend>
			<div class="form-group {{$errors->has('name')?'has-error':''}}">
				<input type="text" class="form-control" name="name" id="name" value="{{$user_login->name}}" placeholder="Name">
				<span class="text-danger">{{$errors->first('name')}}</span>
			</div>
			<div class="form-group {{$errors->has('address')?'has-error':''}}">
				<input type="text" class="form-control" value="{{$user_login->address}}" name="address" id="address" placeholder="Address">
				<span class="text-danger">{{$errors->first('address')}}</span>
			</div>
			<div class="form-group {{$errors->has('city')?'has-error':''}}">
				<input type="text" class="form-control" name="city" value="{{$user_login->city}}" id="city" placeholder="City">
				<span class="text-danger">{{$errors->first('city')}}</span>
			</div>
			<div class="form-group {{$errors->has('state')?'has-error':''}}">
				<input type="text" class="form-control" name="state" value="{{$user_login->state}}" id="state" placeholder="State">
				<span class="text-danger">{{$errors->first('state')}}</span>
			</div>
			<div class="form-group">
				<select name="country" id="country" class="form-control">
					@foreach($countries as $country)
						<option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group {{$errors->has('pincode')?'has-error':''}}">
				<input type="text" class="form-control" name="pincode" value="{{$user_login->pincode}}" id="pincode" placeholder="Pincode">
				<span class="text-danger">{{$errors->first('pincode')}}</span>
			</div>
			<div class="form-group {{$errors->has('mobile')?'has-error':''}}">
				<input type="text" class="form-control" name="mobile" value="{{$user_login->mobile}}" id="mobile" placeholder="Mobile">
				<span class="text-danger">{{$errors->first('mobile')}}</span>
			</div>
			<button type="submit" class="btn btn-primary" style="float: right;">Update Profile</button>
		</form>
	</div><!--/login form-->
</div>
<div class="col-sm-1">
	<h2 class="or">OR</h2>
</div>
update password{{
	<div class="col-sm-4">
		<div class="signup-form"><!--sign up form-->
			<form action="{{url('/update-password',$user_login->id)}}" method="post" class="form-horizontal">
				<legend>Update New Password</legend>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				{{method_field('PUT')}}
				<div class="form-group {{$errors->has('password')?'has-error':''}}">
					<input type="password" class="form-control" name="password" id="password" placeholder="Old Password">
					@if(Session::has('oldpassword'))
						<span class="text-danger">{{Session::get('oldpassword')}}</span>
					@endif
				</div>
				<div class="form-group {{$errors->has('newPassword')?'has-error':''}}">
					<input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password">
					<span class="text-danger">{{$errors->first('newPassword')}}</span>
				</div>
				<div class="form-group {{$errors->has('newPassword_confirmation')?'has-error':''}}">
					<input type="password" class="form-control" name="newPassword_confirmation" id="newPassword_confirmation" placeholder="Confirm Password">
					<span class="text-danger">{{$errors->first('newPassword_confirmation')}}</span>
				</div>
				<button type="submit" class="btn btn-primary" style="float: right;">Update Password</button>
			</form>
		</div><!--/sign up form-->
	</div>


</div>
</div>




<div class="col-sm-4 col-sm-offset-1">
	<div class="login-form"><!--login form-->
		<form action="{{url('/update-profile',$user_login->id)}}" method="post" class="form-horizontal">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{method_field('PUT')}}
			<legend>Account Profile</legend>
			<div class="form-group {{$errors->has('name')?'has-error':''}}">
				<input type="text" class="form-control" name="name" id="name" value="{{$user_login->name}}" placeholder="Name">
				<span class="text-danger">{{$errors->first('name')}}</span>
			</div>
			<div class="form-group {{$errors->has('address')?'has-error':''}}">
				<input type="text" class="form-control" value="{{$user_login->address}}" name="address" id="address" placeholder="Address">
				<span class="text-danger">{{$errors->first('address')}}</span>
			</div>
			<div class="form-group {{$errors->has('city')?'has-error':''}}">
				<input type="text" class="form-control" name="city" value="{{$user_login->city}}" id="city" placeholder="City">
				<span class="text-danger">{{$errors->first('city')}}</span>
			</div>
			<div class="form-group {{$errors->has('state')?'has-error':''}}">
				<input type="text" class="form-control" name="state" value="{{$user_login->state}}" id="state" placeholder="State">
				<span class="text-danger">{{$errors->first('state')}}</span>
			</div>
			<div class="form-group">
				<select name="country" id="country" class="form-control">
					@foreach($countries as $country)
						<option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group {{$errors->has('pincode')?'has-error':''}}">
				<input type="text" class="form-control" name="pincode" value="{{$user_login->pincode}}" id="pincode" placeholder="Pincode">
				<span class="text-danger">{{$errors->first('pincode')}}</span>
			</div>
			<div class="form-group {{$errors->has('mobile')?'has-error':''}}">
				<input type="text" class="form-control" name="mobile" value="{{$user_login->mobile}}" id="mobile" placeholder="Mobile">
				<span class="text-danger">{{$errors->first('mobile')}}</span>
			</div>
			<button type="submit" class="btn btn-primary" style="float: right;">Update Profile</button>
		</form>
	</div><!--/login form-->
</div>
<div class="col-sm-1">
	<h2 class="or">OR</h2>
</div>
<div class="col-sm-4">
	<div class="signup-form"><!--sign up form-->
		<form action="{{url('/update-password',$user_login->id)}}" method="post" class="form-horizontal">
			<legend>Update New Password</legend>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{method_field('PUT')}}
			<div class="form-group {{$errors->has('password')?'has-error':''}}">
				<input type="password" class="form-control" name="password" id="password" placeholder="Old Password">
				@if(Session::has('oldpassword'))
					<span class="text-danger">{{Session::get('oldpassword')}}</span>
				@endif
			</div>
			<div class="form-group {{$errors->has('newPassword')?'has-error':''}}">
				<input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password">
				<span class="text-danger">{{$errors->first('newPassword')}}</span>
			</div>
			<div class="form-group {{$errors->has('newPassword_confirmation')?'has-error':''}}">
				<input type="password" class="form-control" name="newPassword_confirmation" id="newPassword_confirmation" placeholder="Confirm Password">
				<span class="text-danger">{{$errors->first('newPassword_confirmation')}}</span>
			</div>
			<button type="submit" class="btn btn-primary" style="float: right;">Update Password</button>
		</form>
	</div><!--/sign up form-->
</div>







// <div class="col-sm-4 col-sm-offset-1">
// 	<div class="login-form"><!--login form-->
// 		<form action="{{url('/update-profile',$user_login->id)}}" method="post" class="form-horizontal">
// 			<input type="hidden" name="_token" value="{{csrf_token()}}">
// 			{{-- {{method_field('PUT')}}
// 			<legend>Account Profile</legend>
// 			<div class="form-group {{$errors->has('name')?'has-error':''}}">
// 				<input type="text" class="form-control" name="name" id="name" value="{{$user_login->name}}" placeholder="Name">
// 				<span class="text-danger">{{$errors->first('name')}}</span>
// 			</div> 
// 			<div class="form-group {{$errors->has('address')?'has-error':''}}">
// 				<input type="text" class="form-control" value="{{$user_login->address}}" name="address" id="address" placeholder="Address">
// 				<span class="text-danger">{{$errors->first('address')}}</span>
// 			</div>
                                    
// 			<div class="form-group {{$errors->has('city')?'has-error':''}}">
// 				<input type="text" class="form-control" name="city" value="{{$user_login->city}}" id="city" placeholder="City">
// 				<span class="text-danger">{{$errors->first('city')}}</span>
// 			</div>
// 			
// 			<div class="form-group {{$errors->has('state')?'has-error':''}}">
// 				<input type="text" class="form-control" name="state" value="{{$user_login->state}}" id="state" placeholder="State">
// 				<span class="text-danger">{{$errors->first('state')}}</span>
// 			</div>
// 			{{-- <div class="form-group">
// 				<select name="country" id="country" class="form-control">
// 					@foreach($countries as $country)
// 						<option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
// 					@endforeach
// 				</select>
// 			</div> 
// 			<div class="form-group {{$errors->has('pincode')?'has-error':''}}">
// 				<input type="text" class="form-control" name="pincode" value="{{$user_login->pincode}}" id="pincode" placeholder="Pincode">
// 				<span class="text-danger">{{$errors->first('pincode')}}</span>
// 			</div>
                                    
// 			<div class="form-group {{$errors->has('mobile')?'has-error':''}}">
// 				<input type="text" class="form-control" name="mobile" value="{{$user_login->mobile}}" id="mobile" placeholder="Mobile">
// 				<span class="text-danger">{{$errors->first('mobile')}}</span>
// 			</div>
                                    
// 			<button type="submit" class="btn btn-primary" style="float: right;">Update Profile</button>
// 		</form>
// 	</div><!--/login form-->
// </div>
// --}}














// <div class="col-sm-4 ">
// 		<div class="contactinfo pull-right ">
// 				<ul class=" nav nav-pills">
// 					<li><a href="#">Wholesale</a></li>
// 					<li ><a href="#" >Affiliate</a></li>
// 						<li ><a href="#">Events</a></li>
// 						<li ><a href="#">News</a></li>
// 					</ul>
// 				</div>
// </div>
// <div class="col-sm-5"></div>
// <div class="col-sm-3">
// 		<div class="btn-group pull-right">
// 				<div class="btn-group">
// 					<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
// 						LANGUAGE
// 						<span class="caret"></span>
// 					</button>
// 					<ul class="dropdown-menu">
// 						<li><a href="#">ENGLISH</a></li>
// 						<li><a href="#">FRANCE</a></li>
// 						<li><a href="#">SWAHILI</a></li>
// 					</ul>
// 				</div>
                                
// 				<div class="btn-group">
// 					<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
// 						CURRENCY
// 						<span class="caret"></span>
// 					</button>
// 					<ul class="dropdown-menu">
// 						<li><a href="#">RWF</a></li>
// 						<li><a href="#">DOLLAR</a></li>
// 						<li><a href="#">POUND</a></li>
// 						<li><a href="#">BITCOIN</a></li>
// 						<li><a href="#">DAGCOIN</a></li>
// 						<li><a href="#">ETHEREUM</a></li>
// 					</ul>
// 				</div>
// 			</div>
// </div>





// // headerfile!!!!!!!!!!!!!!!!

// <header id="header"><!--header-->
// 	<div class="header_top"><!--header_top-->
// 		<div class="navh container">
// 			<div class="row">
// 				<div class="col-sm-4 ">
// 						<div class="contactinfo pull-right ">
// 								<ul class=" nav nav-pills">
// 									<li><a href="#">Wholesale</a></li>
// 									<li ><a href="#" >Affiliate</a></li>
// 										<li ><a href="#">Events</a></li>
// 										<li ><a href="#">News</a></li>
// 									</ul>
// 								</div>
// 				</div>
// 				<div class="col-sm-5"></div>
// 				<div class="col-sm-3">
// 						<div class="btn-group pull-right">
// 								<div class="btn-group">
// 									<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
// 										LANGUAGE
// 										<span class="caret"></span>
// 									</button>
// 									<ul class="dropdown-menu">
// 										<li><a href="#">ENGLISH</a></li>
// 										<li><a href="#">FRANCE</a></li>
// 										<li><a href="#">SWAHILI</a></li>
// 									</ul>
// 								</div>
                        
// 								<div class="btn-group">
// 									<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
// 										CURRENCY
// 										<span class="caret"></span>
// 									</button>
// 									<ul class="dropdown-menu">
// 										<li><a href="#">RWF</a></li>
// 										<li><a href="#">DOLLAR</a></li>
// 										<li><a href="#">POUND</a></li>
// 										<li><a href="#">BITCOIN</a></li>
// 										<li><a href="#">DAGCOIN</a></li>
// 										<li><a href="#">ETHEREUM</a></li>
// 									</ul>
// 								</div>
// 							</div>
// 				</div>
// 			</div>
// 		</div>
// 	</div><!--/header_top-->

// 	<div class="header-middle"><!--header-middle-->
// 		<div class="container">
// 			<div class="row">
// 				<div class="col-lg-2">
// 					<div class="logo pull-left">
// 						<a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/1ecom-store-logo.png')}}" alt="" /></a>
// 					</div>
 
// 				</div>
// 				<div class="col-lg-4">
// 						<form class="form-inline my-2 my-lg-0">
// 								<input class="form-control mr-sm-2" type="search" style="width:260px;" placeholder="Search" aria-label="Search">
// 								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
// 							</form>
// 						</div> 
// 						<div class="col-lg-6">
// 								<div class="shop-menu pull-right">
// 									<ul class="nav navbar-nav">
// 										<li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
// 										@if(Auth::check())
// 											<li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
// 											<li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
// 											</li>
// 										@else
// 											<li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
// 										@endif
// 										<li>
// 											<a href="{{url('/login_page')}}"><i class="fa fa-user"></i> Register</a>
// 										</li>
// 									</ul>
// 								</div>
// 							</div>      
// 				</div>
 
// 			</div>
// 		</div>
// 	</div><!--/header-middle-->

// 	<div class="header-bottom"><!--header-bottom-->
// 		<div class="container">
// 			<div class="row">
// 				<div class="col-sm-9">
// 					<div class="navbar-header">
// 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
// 							<span class="sr-only">Toggle navigation</span>
// 							<span class="icon-bar"></span>
// 							<span class="icon-bar"></span>
// 							<span class="icon-bar"></span>
// 						</button>
// 					</div>
// 					<div class="mainmenu pull-left">
// 						<ul class="nav navbar-nav collapse navbar-collapse">
// 							<li><a href="{{url('/')}}" class="active">Home</a></li>
// 							<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
// 								<ul role="menu" class="sub-menu">
// 									<li><a href="{{url('/list-products')}}">Products</a></li>
// 									<li><a href="{{url('/myaccount')}}">Account</a></li>
// 									<li><a href="{{url('/viewcart')}}">Cart</a></li>
// 								</ul>
// 							</li>
// 							<li class="dropdown"><a href="#">Categories<i class="fa fa-angle-down"></i></a>
// 								<?php
// 								$categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
// 								?>
// 								<ul role="menu" class="sub-menu">
// 										@foreach($categories as $category)
// 										<?php
// 											$sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
// 										?>
// 									<li>
// 											<a data-toggle="collapse" data-parent="#accordian" href="#sportswear{{$category->id}}">
// 													@if(count($sub_categories)>0)
// 														<span class="badge pull-right"><i class="fa fa-plus"></i></span>
// 													@endif
// 												</a>
// 													<a href="{{route('cats',$category->id)}}">{{$category->name}}</a>
                        
// 									</li>
// 									@if(count($sub_categories)>0)
// 									<li> 
// 										<div id="sportswear{{$category->id}}" class="panel-collapse collapse">
// 											<div class="panel-body">
// 												<ul>
// 													@foreach($sub_categories as $sub_category)
// 														<li><a href="{{route('cats',$sub_category->id)}}">{{$sub_category->name}} </a></li>
// 													@endforeach
// 												</ul>
// 											</div>
// 										</div>
// 									</li>
// 									@endif
// 									@endforeach
// 								</ul>
// 							</li>
                                 
// 							<li><a href="" target="_blank">Contact</a></li>
// 						</ul>
// 					</div>
// 				</div>
// 				<div class="col-sm-3">
                   
// 				</div>

// 			</div>
// 		</div>
// 	</div><!--/header-bottom-->
// </header><!--/header-->


// // end of headerfile!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!











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
		$sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
		?>
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
	li><a href="{{route('cats',$sub_category->id)}}">{{$sub_category->name}} </a></li>
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