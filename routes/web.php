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


//FrontendController
Route::get('/', 'FrontendController@index')->name('home');


//FrontentController End

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//=================Admin Route==========================
//adminController
Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin','Admin\LoginController@login');
Route::get('admin/logout', 'AdminController@Logout')->name('admin.logout');
//CategoryController
Route::get('admin/categories', 'Admin\CategoryController@index')->name('admin.category');
Route::post('admin/categories-store', 'Admin\CategoryController@storecat')->name('store.category');

//umanageController
Route::get('admin/user', 'Admin\UmanageController@index')->name('admin.umanage');


//consultantController
Route::get('consultan/home', 'ConsultantController@index');
Route::get('consultant','Consultant\LoginController@showLoginForm')->name('login.consultant');
Route::post('consultant','Consultant\LoginController@login');

//userpanel



