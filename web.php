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


Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register', 'RegisterController@insert');
Route::get('/logout', 'LogoutController@index');

Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', ['as'=>'home.index','uses'=>'HomeController@index']);

	Route::group(['middleware'=>['admintype']], function(){
		Route::get('/admin/customer', 'AdminController@customer')->name('admin.customer');
		Route::get('/admin/deletecustomer/{id}', 'AdminController@deletecustomer')->name('admin.deletecustomer');
		Route::post('/admin/deletecustomer/{id}', 'AdminController@destroycustomer');
		Route::get('/admin/addmedicine', 'AdminController@addmedicine')->name('admin.addmedicine');
		Route::post('/admin/addmedicine', 'AdminController@insert');
		Route::get('/admin/index', 'AdminController@index')->name('admin.index');	
		Route::get('/admin/details/{id}', 'AdminController@details')->name('admin.details');
		Route::get('/admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
		Route::post('/admin/edit/{id}', 'AdminController@update')->name('admin.update');
		Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
		Route::post('/admin/delete/{id}', 'AdminController@destroy')->name('admin.destroy');
		
	});
	
	Route::group(['middleware'=>['customertype']], function(){
		Route::get('/customer/index', 'CustomerController@index')->name('customer.index');
		Route::get('/customer/medicine', 'CustomerController@medicine')->name('customer.medicine');
	});
});