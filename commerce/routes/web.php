<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/product_category{category}',[HomeController::class,'product_category'])->name('product_category');
Route::get('/product_brand{brand}',[HomeController::class,'product_brand'])->name('product_brand');
Route::get('/contact_admin',[HomeController::class,'message_admin'])->name('message_admin');
Route::post('/contact_admin/store',[HomeController::class,'message_admin_store'])->name('message_admin_store');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/details{product}',[DetailsController::class,'index'])->name('details');


Route::middleware(['auth'])->group(function () {



       Route::middleware(['admin'])->group(function () {

            Route::get('/admin/index',[AdminController::class,'index'])->name('admin_index');
            Route::post('/admin/logout',[LogController::class,'destroy_admin'])->name('logout_admin');

            Route::get('/admin/seller',[AdminController::class,'seller_user'])->name('seller_user');
            Route::get('/admin/buyer',[AdminController::class,'buyer_user'])->name('buyer_user');
            Route::get('/admin/user/{user}',[AdminController::class,'user_view'])->name('user_view');

            Route::post('/admin/activate{user}',[AdminController::class,'activate_user'])->name('activate_user');
            Route::post('/admin/disable{user}',[AdminController::class,'disable_user'])->name('disable_user');


            Route::get('/admin/message',[AdminController::class,'admin_message'])->name('admin_message_view');
            Route::post('/admin/message/{message}',[AdminController::class,'admin_message_read'])->name('admin_message_read');
            Route::get('/admin/message/{message}',[AdminController::class,'admin_message_read'])->name('admin_message_read_m');


            Route::get('/admin/transaction',[AdminController::class,'admin_transaction'])->name('admin_transaction_view');
            Route::get('/admin/transaction/{transaction}',[AdminController::class,'admin_transaction_approve'])->name('admin_transaction_approve');
            Route::post('/admin/tranaction/verified/{transaction}',[AdminController::class,'admin_transaction_verified'])->name('admin_transaction_verified');
            Route::post('/admin/withdrawal/{transaction}',[AdminController::class,'admin_withdrawal_verified'])->name('admin_withdrawal_verified');

            Route::post('/admin/tranaction/decline/{transaction}',[AdminController::class,'admin_transaction_decline'])->name('admin_transaction_decline');



            Route::get('/admin/order',[AdminController::class,'admin_order'])->name('admin_order');


            Route::resource('products', ProductController::class);
            Route::resource('categories', CategoryController::class);
            Route::resource('brands', BrandController::class);

           });


     Route::middleware(['seller'])->group(function () {

            Route::get('/product_index',[HomeController::class,'seller_product_index'])->name('seller_product_index');
            Route::get('/product_show{product}',[HomeController::class,'seller_product_show'])->name('seller_product_show');
            Route::get('/product_create',[HomeController::class,'seller_product_create'])->name('seller_product_create');
            Route::post('/product_store',[HomeController::class,'seller_product_store'])->name('seller_product_store');
            Route::delete('/product_destroy{product}',[HomeController::class,'seller_product_destroy'])->name('seller_product_destroy');
            Route::get('/product_edit{product}',[HomeController::class,'seller_product_edit'])->name('seller_product_edit');
            Route::post('/product_update{product}',[HomeController::class,'seller_product_update'])->name('seller_product_update');


            Route::get('/delivery_confirm',[HomeController::class,'delivery_confirm'])->name('delivery_confirm');
            Route::get('/delivery/confirm/{order}',[HomeController::class,'delivered'])->name('delivered');
            Route::delete('/delivery_destroy',[HomeController::class,'delivery_destroy'])->name('delivery_destroy');

        });






Route::get('/user_deposit',[HomeController::class,'user_deposit'])->name('user_deposit');
Route::post('/user_deposit/store',[HomeController::class,'user_deposit_store'])->name('user_deposit_store');
Route::get('/user_transaction',[HomeController::class,'user_transaction'])->name('user_transaction');
Route::delete('/user_transaction/{transaction}',[HomeController::class,'user_transaction_destroy'])->name('user_transaction_destroy');

Route::get('/user_withdrawal',[HomeController::class,'user_withdrawal'])->name('user_withdrawal');
Route::post('/user_withdrawal/store',[HomeController::class,'user_withdrawal_store'])->name('user_withdrawal_store');

Route::get('/user_profile',[HomeController::class,'user_profile'])->name('user_profile');
Route::post('/user_profile/store',[HomeController::class,'user_profile_store'])->name('user_profile_store');
Route::put('/user_profile/{profile}',[HomeController::class,'user_profile_update'])->name('user_profile_update');



Route::get('/cart/{product}',[HomeController::class,'cart_store'])->name('cart_store');
Route::get('/cart/',[HomeController::class,'cart_index'])->name('cart');
Route::get('/cart/remove/{cart}',[HomeController::class,'cart_remove'])->name('cart_remove');


Route::get('/order{product}',[HomeController::class,'order_index'])->name('order');
Route::get('/cart/order/{product}',[HomeController::class,'order_cart_index'])->name('order_cart');
Route::post('/order/store{product}',[HomeController::class,'order_store'])->name('order_store');

Route::get('/delivery',[HomeController::class,'delivery'])->name('delivery');







Route::post('/logout',[LogController::class,'destroy'])->name('logout');




});




Route::middleware(['guest'])->group(function () {


Route::get('/login_user',[LogController::class,'index'])->name('login');
Route::post('/user_store',[LogController::class,'store'])->name('user_store');


Route::get('/register_seller',[RegisterController::class,'register_seller'])->name('register_seller');
Route::post('/store_seller',[RegisterController::class,'store_seller'])->name('store_seller');

Route::get('/register_buyer',[RegisterController::class,'register_buyer'])->name('register_buyer');
Route::post('/store_buyer',[RegisterController::class,'store_buyer'])->name('store_buyer');

});

Route::get('/admin/login',[LogController::class,'index_admin'])->name('login_admin');
Route::post('/admin/store',[LogController::class,'admin_store'])->name('admin_store');























