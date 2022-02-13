<?php

use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DiscountController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; /*add*/
use App\Http\Controllers\admin\Image;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\OrderController;

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

//=========admin Brand section==============
Route::get('admin_brand',[BrandController::class,'index']);
Route::post('admin_store_brand',[BrandController::class,'store']);
Route::get('admin_brand_edit/{id}',[BrandController::class,'edit']);
Route::post('admin_update_brand',[BrandController::class,'update']);
Route::get('admin_brand_delete/{brand_id}',[BrandController::class,'Delete']);
Route::get('admin_brand_inactive/{brand_id}',[BrandController::class,'Inactive']);
Route::get('admin_brand_active/{brand_id}',[BrandController::class,'Active']);

//===========admin products section================
Route::get('admin_products_add',[ProductController::class,'add_product']);
Route::post('admin_store_products',[ProductController::class,'store']);
Route::get('admin_products_manage',[ProductController::class,'manage_product']);
Route::get('admin_products_edit/{id}',[ProductController::class,'edit']);
Route::post('admin_update_products/{id}',[ProductController::class,'update']);
Route::get('admin_products_delete/{id}',[ProductController::class,'Delete']);
Route::get('admin_products_inactive/{id}',[ProductController::class,'Inactive']);
Route::get('admin_products_active/{id}',[ProductController::class,'Active']);

//===========admin discount section================
Route::get('admin_discount',[DiscountController::class,'index']);
Route::post('admin_store_discount',[DiscountController::class,'store']);
Route::get('admin_discount_edit/{id}',[DiscountController::class,'edit']);
Route::post('admin_update_discount/{id}',[DiscountController::class,'update']);
Route::get('admin_discount_delete/{id}',[DiscountController::class,'Delete']);
Route::get('admin_discount_inactive/{id}',[DiscountController::class,'Inactive']);
Route::get('admin_discount_active/{id}',[DiscountController::class,'Active']);

});


//================Frontend Home========================
Route::get('/',[HomeController::class,'index']);

//================Frontend Shop========================
Route::get('shop',[ShopController::class,'shop_page']);
//product details
Route::get('product_details/{id}',[ShopController::class,'product_details_page']);
Route::get('category_product_show/{id}',[ShopController::class,'category_product_show_page']);

//================Frontend Blog========================
Route::get('blog',[BlogController::class,'blog_page']);


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

});
