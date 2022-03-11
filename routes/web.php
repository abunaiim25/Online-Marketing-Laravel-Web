<?php

use App\Http\Controllers\admin\AboutadminController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactadminController;
use App\Http\Controllers\admin\DiscountController;
use App\Http\Controllers\admin\EmailController;
use App\Http\Controllers\admin\FrontcontrolController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; /*add*/
use App\Http\Controllers\admin\Image;
use App\Http\Controllers\admin\NewsadminController;
use App\Http\Controllers\admin\OrderadminController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\frontend\WishlistController;
use App\Http\Controllers\SslCommerzPaymentController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//admin & frontend -> /home or index after login
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::middleware(['auth', 'isAdmin'])->group(function(){

//================Admin Category========================
Route::get('admin_category',[CategoryController::class,'index']);
Route::post('admin_store_category',[CategoryController::class,'store']);
Route::get('admin_categories_edit/{id}',[CategoryController::class,'edit']);
Route::post('admin_update_category',[CategoryController::class,'update']);
Route::get('admin_categories_delete/{id}',[CategoryController::class,'Delete']);
Route::get('admin_categories_inactive/{id}',[CategoryController::class,'Inactive']);
Route::get('admin_categories_active/{id}',[CategoryController::class,'Active']);
Route::get('category_search',[CategoryController::class,'category_search']);

//=========admin Brand section==============
Route::get('admin_brand',[BrandController::class,'index']);
Route::post('admin_store_brand',[BrandController::class,'store']);
Route::get('admin_brand_edit/{id}',[BrandController::class,'edit']);
Route::post('admin_update_brand',[BrandController::class,'update']);
Route::get('admin_brand_delete/{brand_id}',[BrandController::class,'Delete']);
Route::get('admin_brand_inactive/{brand_id}',[BrandController::class,'Inactive']);
Route::get('admin_brand_active/{brand_id}',[BrandController::class,'Active']);
Route::get('brand_search',[BrandController::class,'brand_search']);

//===========admin products section================
Route::get('admin_products_add',[ProductController::class,'add_product']);
Route::post('admin_store_products',[ProductController::class,'store']);
Route::get('admin_products_manage',[ProductController::class,'manage_product']);
Route::get('admin_products_edit/{id}',[ProductController::class,'edit']);
Route::post('admin_update_products/{id}',[ProductController::class,'update']);
Route::get('admin_products_delete/{id}',[ProductController::class,'Delete']);
Route::get('admin_products_inactive/{id}',[ProductController::class,'Inactive']);
Route::get('admin_products_active/{id}',[ProductController::class,'Active']);
Route::get('product_search',[ProductController::class,'product_search']);

//===========admin discount section================
Route::get('admin_discount',[DiscountController::class,'index']);
Route::post('admin_store_discount',[DiscountController::class,'store']);
Route::get('admin_discount_edit/{id}',[DiscountController::class,'edit']);
Route::post('admin_update_discount/{id}',[DiscountController::class,'update']);
Route::get('admin_discount_delete/{id}',[DiscountController::class,'Delete']);
Route::get('admin_discount_inactive/{id}',[DiscountController::class,'Inactive']);
Route::get('admin_discount_active/{id}',[DiscountController::class,'Active']);
Route::get('discount_search',[DiscountController::class,'discount_search']);

//===========admin Order section================
Route::get('admin_orders_view/{id}',[OrderadminController::class,'admin_orders_view']);
Route::get('admin_orders_delete/{id}',[OrderadminController::class,'admin_orders_delete']);
Route::PUT('update_order_status/{id}',[OrderadminController::class,'update_order_status']);
Route::get('order_status_history',[OrderadminController::class,'order_status_history']);
Route::get('orders_search',[OrderadminController::class,'orders_search']); 
Route::get('orders_history_search',[OrderadminController::class,'orders_history_search']); 

//=====================admin_payment_online===========================
Route::get('admin_payment_online',[PaymentController::class,'admin_payment_online']);
Route::get('admin_payment_orders_view/{id}',[PaymentController::class,'admin_payment_orders_view']);
Route::get('admin_payment_orders_delete/{id}',[PaymentController::class,'admin_payment_orders_delete']);
Route::PUT('update_payment_status/{id}',[PaymentController::class,'update_payment_status']);
Route::get('order_payment_history',[PaymentController::class,'order_payment_history']);
Route::get('orders_search',[PaymentController::class,'orders_search']); 
Route::get('orders_history_search',[PaymentController::class,'orders_history_search']); 

//==================send mail===================
Route::get('/email_view/{id}',[EmailController::class,'email_view']);
Route::post('/send_email/{id}',[EmailController::class,'send_email']);

//================admin user=====================
Route::get('users',[UserController::class,'users']);
Route::get('admins',[UserController::class,'admins']);
Route::get('usertype_delete/{id}',[UserController::class,'Delete']);
Route::get('usertype_edit/{id}',[UserController::class,'edit']);
Route::post('admin_update_user/{id}',[UserController::class,'update']);
Route::get('users_search',[UserController::class,'users_search']);
Route::get('admins_search',[UserController::class,'admins_search']);

//===================admin_contact=========================
Route::get('admin_contact',[ContactadminController::class,'admin_contact']);
Route::get('contact_seen_admin/{id}',[ContactadminController::class,'contact_seen_admin']);
Route::get('message_seen/{id}',[ContactadminController::class,'message_seen']);
Route::get('email_view/{id}',[ContactadminController::class,'email_view']);
Route::get('contact_search',[ContactadminController::class,'contact_search']);
//contact_email_send
Route::get('contact_email_view/{id}',[EmailController::class,'contact_email_view']);
Route::post('/contact_send_email/{id}',[EmailController::class,'contact_send_email']);

//===================== Admin News ========================
Route::get('admin_news_add',[NewsadminController::class,'admin_news_add']);
Route::post('admin_store_news',[NewsadminController::class,'admin_store_news']);
Route::get('admin_news_manage',[NewsadminController::class,'admin_news_manage']);
Route::get('/edit_news/{id}',[NewsadminController::class,'edit_news']);
Route::post('/news_edit_update/{id}',[NewsadminController::class,'news_edit_update']);
Route::get('/delete_news/{id}',[NewsadminController::class,'delete_news']);
Route::get('news_search',[NewsadminController::class,'news_search']);

//===================== Admin About ========================
Route::get('admin_descriptoon_add',[AboutadminController::class,'admin_descriptoon_add']);
Route::post('admin_about_store_description',[AboutadminController::class,'admin_about_store_description']);
//team
Route::get('admin_team_add',[AboutadminController::class,'admin_team_add']);
Route::post('admin_team_store',[AboutadminController::class,'admin_team_store']);
Route::get('admin_team_manage',[AboutadminController::class,'admin_team_manage']);
Route::get('admin_team_edit/{id}',[AboutadminController::class,'admin_team_edit']);
Route::post('admin_team_update/{id}',[AboutadminController::class,'admin_team_update']);
Route::get('admin_team_delete/{id}',[AboutadminController::class,'admin_team_delete']);
Route::get('team_person_search',[AboutadminController::class,'team_person_search']);

//======================admin_front_control=========================
Route::get('admin_front_control',[FrontcontrolController::class,'admin_front_control']);
Route::post('front_control_store',[FrontcontrolController::class,'front_control_store']);


});

//=================================================================================================================================================================

//================Frontend Home========================
Route::get('/',[HomeController::class,'index']);

//================Frontend Shop========================
Route::get('shop',[ShopController::class,'shop_page']);
//product details
Route::get('product_details/{id}',[ShopController::class,'product_details_page']);
Route::get('category_product_show/{id}',[ShopController::class,'category_product_show_page']);

//================Frontend News========================
Route::get('news',[NewsController::class,'news_page']);
Route::get('news_details/{id}',[NewsController::class,'news_details']);

//====================About=========================
Route::get('about',[AboutController::class,'about_page']);

//=====================Search===========================
Route::get('search_product_item',[SearchController::class,'search_product_item']);
Route::get('search_news_query',[SearchController::class,'search_news_query']);

//===================contact=====================
Route::get('contact',[ContactController::class,'contact']);
Route::post('contact_submit',[ContactController::class,'contact_submit']);

//==================SSLCOMMERZ Start================
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



//=====================================================================================================================================================================

//=============auth check===========================
Route::middleware(['auth'])->group(function (){
    
//================Frontend Cart========================
Route::post('cart_add/{id}',[CartController::class,'cart_add']);
Route::get('cart',[CartController::class,'cart_page']);
Route::post('cart_quantity_update/{id}',[CartController::class,'cart_quantity_update']);
Route::get('cart_destroy/{id}',[CartController::class,'cart_destroy']);
//discount
Route::post('discount_apply',[CartController::class,'discount_apply']);
Route::get('discount_destroy',[CartController::class,'discount_destroy']);

//============= checkout section=============
Route::get('checkout',[CheckoutController::class,'index']);

//============= Order section=============
Route::post('place_order',[OrderController::class,'place_order']);
Route::get('order_success',[OrderController::class,'order_success']);

//============== My order ===================
Route::get('my_orders',[OrderController::class,'my_orders']);
Route::get('my_orders_delete/{id}',[OrderController::class,'my_orders_delete']);
Route::get('my_orders_view/{id}',[OrderController::class,'my_orders_view']);
Route::get('my_shipping_edit/{id}',[OrderController::class,'my_shipping_edit']);
Route::post('update_my_shipping/{id}',[OrderController::class,'update_my_shipping']);

//=======================Wishlist==========================
Route::get('add_to_wishlist/{id}',[WishlistController::class,'add_to_wishlist']);
Route::get('wishlist',[WishlistController::class,'wishlist']);     
Route::get('wishlist_destroy/{id}',[WishlistController::class,'wishlist_destroy']);


});



