<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* FrontEnd Location */
// Route::view('/', 'welcome');
Route::get('/','IndexController@index');
Route::get('/list-products','IndexController@shop');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}','IndexController@detialpro');
////// get Attribute ////////////
Route::get('/get-product-attr','IndexController@getAttrs');
///// Cart Area /////////
Route::post('/addToCart','CartController@addToCart')->name('addToCart');
Route::get('/viewcart','CartController@index');
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::get('/cart/update-quantity/{id}/{quantity}','CartController@updateQuantity');
/////////////////////////
/// Apply Coupon Code
Route::post('/apply-coupon','CouponController@applycoupon');
/// Simple User Login /////
Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');

////// User Authentications ///////////
    Route::group(['middleware'=>'FrontLogin_middleware'],function (){
    Route::get('/myaccount','UsersController@account');
    Route::get('/edit','UsersController@editaccount');
    Route::put('/update-profile/{id}','UsersController@updateprofile');
    Route::put('/update-password/{id}','UsersController@updatepassword');
    Route::get('/change-p','UsersController@changepassword');
    Route::get('/check-out','CheckOutController@index');
    Route::post('/submit-checkout','CheckOutController@submitcheckout');
    Route::get('/order-review','OrdersController@index');
    Route::post('/submit-order','OrdersController@order');
    Route::get('/cod','OrdersController@cod');
    Route::get('/paypal','OrdersController@paypal');
});
///




/* Admin Location */
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/', 'AdminController@index')->name('admin_home');
    /// Setting Area
    Route::get('/settings', 'AdminController@settings');
    Route::get('/check-pwd','AdminController@chkPassword');
    Route::post('/update-pwd','AdminController@updatAdminPwd');
    /// Category Area
    Route::resource('/category','CategoryController');
    Route::get('delete-category/{id}','CategoryController@destroy');
    Route::get('/check_category_name','CategoryController@checkCateName');
    /// Products Area
    Route::resource('/product','ProductsController');
    Route::get('delete-product/{id}','ProductsController@destroy');
    Route::get('delete-image/{id}','ProductsController@deleteImage');
    /// Product Attribute
    Route::resource('/product_attr','ProductAtrrController');
    Route::get('delete-attribute/{id}','ProductAtrrController@deleteAttr');
    /// Product Images Gallery
    Route::resource('/image-gallery','ImagesController');
    Route::get('delete-imageGallery/{id}','ImagesController@destroy');
    /// ///////// Coupons Area //////////
    Route::resource('/coupon','CouponController');
    Route::get('delete-coupon/{id}','CouponController@destroy');
    ///////////// Recaptcha code//////////
    Route::get('/register_user', 'UsersController@index');
    Route::post('/register_user', 'UsersController@register');
///

// Route::get('/edit','UsersController@edit-account');

});

/////////////// terms and conditions for users Route//////////////////////
Route::get('/termsus', 'UsersController@terms_conditions');

///////////////// Wholesale Route /////////////////////////
Route::get('/wholesale/register','WholesalesController@index');
Route::post('/register_wholesale','WholesalesController@register');
Route::post('/login_wholesale','WholesalesController@login');
Route::get('/wholesale/login', 'WholesalesController@loginPage');
Route::get('/logout','WholesalesController@logout');
Route::get('/termswh','WholesalesController@terms_conditions');

///////////////// Wholesale  Dashboard Route/////////////////////////
Route::get('/dashboard','WholesalesController@logndash');
Route::get('/updateProfile','WholesalesController@updateProfile');
Route::get('/ins_products','WholesalesController@insert_product');
Route::get('/v_products','WholesalesController@view_product');
Route::get('/my_profile','WholesalesController@myProfile');
Route::get('/stores','WholesalesController@store');

// Route::get('/verify_account','WholesalesController@verifyaccount');
// Route::get('/upload_products','WholesalesController@uploadproducts');

// Route::get('/changep_Whol','WholesalesController@changepassword');


// Affiliate Route


