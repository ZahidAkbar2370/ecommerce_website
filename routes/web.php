<?php

use Illuminate\Support\Facades\Route;

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



// Values Store Through API
Route::get('api',"ApiController@api");


Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
			


			// Admin Panel

// Product
Route::get('dashboard',"Admin\ProductController@index");
Route::get('view-products',"Admin\ProductController@index");
Route::get('add-product',"Admin\ProductController@create");
Route::post('save-product',"Admin\ProductController@store");
Route::get('delete-product/{id}',"Admin\ProductController@destroy");
Route::get('edit-product/{id}',"Admin\ProductController@edit");
Route::post('update-product/{id}',"Admin\ProductController@update");

// Category
Route::get('view-categories',"Admin\CategoryController@index");
Route::get('add-category',"Admin\CategoryController@create");
Route::post('save-category',"Admin\CategoryController@store");
Route::get('delete-category/{id}',"Admin\CategoryController@destroy");
Route::get('edit-category/{id}',"Admin\CategoryController@edit");
Route::post('update-category/{id}',"Admin\CategoryController@update");
// Buyer
Route::get('view-buyers',"Admin\BuyerController@index");
Route::get('add-buyer',"Admin\BuyerController@create");
Route::post('save-buyer',"Admin\BuyerController@store");
Route::get('edit-buyer/{id}',"Admin\BuyerController@edit");
Route::post('update-buyer/{id}',"Admin\BuyerController@update");
Route::get('delete-buyer/{id}',"Admin\BuyerController@destroy");
// Order
Route::get('view-orders',"Admin\OrderController@index");
Route::get('view_order_detail/{id}',"Admin\OrderController@order_detail");
// Contact
Route::get('view-contacts',"Admin\MessageController@index");
Route::get('delete-contact/{id}',"Admin\MessageController@destroy");

				// App

// Home Product Detail
Route::get('/',"Frontend\HomeController@index");
Route::get('index',"Frontend\HomeController@index");
Route::get("product-detail/{id}",'Frontend\HomeController@productDetail');
// Cart
Route::post("add-to-cart",'Frontend\CartController@addToCart');
Route::get("view-cart",'Frontend\CartController@viewCart');
Route::get("delete-cart-order/{id}",'Frontend\CartController@destroyCartOrder');
Route::get("checkout",'Frontend\CartController@view_checkout');
Route::post("save-checkout",'Frontend\CartController@save_heckout');
// Profile
Route::get("profile",'Frontend\ProfileController@index');
Route::post("update-profile",'Frontend\ProfileController@update');
// contact
Route::get("contact",'Frontend\ContactController@create');
Route::post("save-contact",'Frontend\ContactController@store');