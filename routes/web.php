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
Route::get('/chat', 'FrontendController@chat')->name('chatcon');
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

//checkout
Route::get('checkout', 'CheckoutController@index');

//place order
Route::post('place/order', 'OrderController@storeOrder')->name('place-order');
Route::get('order/success', 'OrderController@orderSuccess');

//product details
Route::get('product/details/{product_id}', 'HomeController@productDetail');
//search
Route::get('/search', 'HomeController@search')->name('search');


//user profile
Route::get('user/profile','ProfileController@uProfile')->name('user.profile');
//user Orders
Route::get('user/Orders-Details/','ProfileController@uOrders')->name('user.orders');
Route::get('user/orders/view/{id}','ProfileController@ordersView')->name('view-orders');
//user consultant
Route::get('user/consultant', 'ProfileController@consultantManage')->name('user.consultant');

//




//blood controller
Route::get('blood', 'BloodController@blood')->name('blood.page');
Route::get('/user/blood', 'BloodController@userblood')->name('user.blood');
Route::post('blood/store','BloodController@Storeblood')->name('store-blood');
Route::get('blood/search','BloodController@search')->name('search.blood');




//blog page
Route::get('blog', 'HomeController@blog')->name('blog.page');
Route::get('post/details/{post_id}', 'HomeController@postDetail');

//shop page
Route::get('shop', 'HomeController@shop')->name('shop.page');





//categorywise product show
Route::get('category/product-show/{id}', 'HomeController@catWp');
Route::get('category/post-show/{id}', 'HomeController@catWb');





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
//Orders
Route::get('admin/orders', 'Admin\OrdersController@index')->name('admin.orders');
Route::get('admin/orders/view/{id}', 'Admin\OrdersController@viewOrders')->name('view-orders');

Route::get('admin/orders/pending/{order_id}', 'Admin\OrdersController@Pending');
Route::get('admin/orders/success/{order_id}', 'Admin\OrdersController@Success');

Route::get('admin/orders/delete/{order_id}', 'Admin\OrdersController@Delete');




//umanageController
Route::get('admin/user', 'Admin\UmanageController@index')->name('admin.umanage');
Route::get('admin/user/delete/{user_id}', 'Admin\UmanageController@Delete');


Route::get('admin/consultant', 'Admin\UmanageController@consultantManage')->name('admin.consultant');
//consultant manage
Route::get('admin/consultant/view/{con_id}', 'Admin\UmanageController@cView');
Route::get('admin/consultant/delete/{con_id}', 'Admin\UmanageController@cDelete');
Route::get('admin/consultant/inactive/{con_id}', 'Admin\UmanageController@cInactive');
Route::get('admin/consultant/active/{con_id}', 'Admin\UmanageController@cActive');

//admin blog manage
Route::get('admin/blog/manage', 'Admin\BlogmanageController@index')->name('admin.blog');

Route::get('admin/post/view/{post_id}', 'Admin\BlogmanageController@Postview');

Route::get('admin/post/delete/{post_id}', 'Admin\BlogmanageController@Delete');
Route::get('admin/post/inactive/{post_id}', 'Admin\BlogmanageController@Inactive');
Route::get('admin/post/active/{post_id}', 'Admin\BlogmanageController@Active');









//consultantController
Route::get('consultant/login','Consultant\LoginController@loginFrom')->name('consultant.login');

Route::get('consultant/logout','ConsultantController@Logout')->name('consultant.logout');
Route::post('checkConsultant/login','Consultant\LoginController@constantLogin')->name('verify-consultant.login');
Route::get('consultant/register','Consultant\RegistrationController@regFrom')->name('consultant.registetion');
Route::post('consultant/register/submit','Consultant\RegistrationController@consultantReg')->name('consultant.registered');


Route::get('consultant/home','ConsultantController@index')->name('consultant-home');
Route::get('consultant/inbox','ConsultantController@inbox')->name('consultant-inbox');


//consultant blog 
Route::get('consultant/categories', 'Consultant\BlogcategoryController@index')->name('consultant.category');
Route::post('consultant/categories-store', 'Consultant\BlogcategoryController@storecat')->name('store.category');
Route::get('consultant/categories/edit/{cat_id}', 'Consultant\BlogcategoryController@Edit');
Route::post('consultant/categories-update', 'Consultant\BlogcategoryController@UpdateCat')->name('update.category');
Route::get('consultant/categories/delete/{cat_id}', 'Consultant\BlogcategoryController@Delete');



Route::get('consultant/post/add', 'Consultant\BlogController@index')->name('add.post');
Route::post('consultant/post/store', 'Consultant\BlogController@Storepost')->name('store-post');
Route::get('consultant/post/view', 'Consultant\BlogController@Viewpost')->name('view-post');
Route::get('consultant/post/edit/{post_id}', 'Consultant\BlogController@Editpost');
Route::post('consultant/post/update', 'Consultant\BlogController@Updatepost')->name('update-post');
Route::get('consultant/post/delete/{post_id}', 'Consultant\BlogController@Delete');






//userpanel



