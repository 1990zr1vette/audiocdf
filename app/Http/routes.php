<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// ********** ADMIN ********** //
Route::get('admin', 'AdminController@index');
Route::post('admin/login', 'AdminController@login');
Route::get('admin/logout', 'AdminController@logout');
Route::get('admin/register', 'AdminController@register');
Route::post('admin/newuser', 'AdminController@newuser');
Route::get('admin/users/changePassword/{id}', 'UserController@changePassword');

Route::resource('admin/users', 'UserController');

Route::resource('admin/brands', 'BrandController');
Route::resource('admin/brands.products', 'BrandProductController');

Route::resource('admin/products', 'ProductController');
Route::resource('admin/products.producttypes', 'ProductTypeController');

Route::resource('admin/announcements', 'AnnouncementController');
Route::resource('admin/editorials', 'EditorialController');
Route::post('admin/editorials/updateCurrent', 'EditorialController@updateCurrent');
Route::resource('admin/events', 'EventController');
Route::post('admin/events/updateCurrent', 'EventController@updateCurrent');
// ********** ADMIN ********** //

// ********** HOME ********** //
Route::get('/', 'HomeController@index_en');
Route::get(HOME, 'HomeController@index_en');
Route::get(HOME_FR, 'HomeController@index_fr');
// ********** HOME ********** //

// ********** BRANDS ********** //
Route::get(BRANDS, 'BrandController@brands');
Route::get(BRANDS_FR, 'BrandController@marques');

Route::get(BRANDS . '/{brand}/{id}', 'BrandController@brand');
Route::get(BRANDS_FR . '/{brand}/{id}', 'BrandController@marque');

Route::get(BRANDS . '/{brand}/{product}/{brand_id}/{product_id}', 'BrandController@brandproduct');
Route::get(BRANDS_FR . '/{brand}/{product}/{brand_id}/{product_id}', 'BrandController@marqueproduit');
// ********** BRANDS ********** //

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
