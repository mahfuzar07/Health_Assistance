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

// Route::get('/', function () {
//     return view('welcome');
// });
//==========================frontend route=========================================
//FrontendController
Route::get('/', 'FrontendController@index');
//FrontentController End
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//frontend cart
Route::post('add/to-cart/{product_id}', 'CartController@addToCart');
Route::get('cart', 'CartController@Cartpage');
Route::get('cart/remove/{cart_id}', 'CartController@Remove');
Route::post('cart/quantity/update/{cart_id}', 'CartController@qtyUpdate');
Route::post('coupon/apply', 'CartController@applyCoupon');
Route::get('coupon/delete', 'CartController@cDelete');

//product details
Route::get('product/details/{product_id}', 'HomeController@productDetail');







//shop page
Route::get('shop', 'HomeController@shop')->name('shop.page');

//categorywise product show
Route::get('category/product-show/{id}', 'HomeController@catWp');




//=================Admin Route==========================
//adminController
Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin','Admin\LoginController@login');
Route::get('admin/logout', 'AdminController@Logout')->name('admin.logout');
//CategoryController
Route::get('admin/categories', 'Admin\CategoryController@index')->name('admin.category');
Route::post('admin/categories-store', 'Admin\CategoryController@storecat')->name('store.category');
Route::get('admin/categories/edit/{cat_id}', 'Admin\CategoryController@Edit');
Route::post('admin/categories-update', 'Admin\CategoryController@UpdateCat')->name('update.category');
Route::get('admin/categories/delete/{cat_id}', 'Admin\CategoryController@Delete');
Route::get('admin/categories/inactive/{cat_id}', 'Admin\CategoryController@Inactive');
Route::get('admin/categories/active/{cat_id}', 'Admin\CategoryController@Active');


//product
Route::get('admin/product/add', 'Admin\ProductController@Addproduct')->name('add-product');
Route::post('admin/product/store', 'Admin\ProductController@Storeproduct')->name('store-product');
Route::get('admin/product/view', 'Admin\ProductController@Viewproduct')->name('view-product');
Route::get('admin/product/edit/{product_id}', 'Admin\ProductController@editproduct');
Route::post('admin/product/update', 'Admin\ProductController@Updateproduct')->name('update-product');
Route::get('admin/product/delete/{product_id}', 'Admin\ProductController@Delete');
Route::get('admin/product/inactive/{product_id}', 'Admin\ProductController@Inactive');
Route::get('admin/product/active/{product_id}', 'Admin\ProductController@Active');

//Coupon
Route::get('admin/coupon', 'Admin\CouponController@index')->name('admin.coupon');
Route::post('admin/coupon-store', 'Admin\CouponController@storecpn')->name('store.coupon');
Route::get('admin/coupon/edit/{cpn_id}', 'Admin\CouponController@Edit');
Route::post('admin/coupon-update', 'Admin\CouponController@Updatecpn')->name('update.coupon');
Route::get('admin/coupon/delete/{cpn_id}', 'Admin\CouponController@Delete');
Route::get('admin/coupon/inactive/{cpn_id}', 'Admin\CouponController@Inactive');
Route::get('admin/coupon/active/{cpn_id}', 'Admin\CouponController@Active');




//umanageController
Route::get('admin/user', 'Admin\UmanageController@index')->name('admin.umanage');
Route::get('admin/user/delete/{user_id}', 'Admin\UmanageController@Delete');











//consultantController
Route::get('consultan/home', 'ConsultantController@index');
Route::get('consultant','Consultant\LoginController@showLoginForm')->name('login.consultant');
Route::post('consultant','Consultant\LoginController@login');

//userpanel



