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
use App\Http\Controllers\frontend\MyOrderPayment;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\RattingController;
use App\Http\Controllers\frontend\ReviewController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\frontend\WishlistController;
use App\Http\Controllers\SslCommerzPaymentController;



//admin & frontend -> /home or index after login
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::middleware(['auth', 'isAdmin'])->group(function(){
    
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

//===================================================================================================


//================Frontend Home========================
Route::get('/',[HomeController::class,'index']);

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



//=====================================================================================================================================================================