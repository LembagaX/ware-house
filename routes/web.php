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

Route::group(['prefix' => config('backpack.base.route_prefix'), 'middleware' => ['admin'], 'namespace' => 'Admin'], function() {
	CRUD::resource('packing', 'PackingCrudController');
	CRUD::resource('good', 'GoodCrudController');
	CRUD::resource('production', 'ProductionCrudController');
	CRUD::resource('user', 'UserCrudController');
	CRUD::resource('product', 'ProductCrudController');
	CRUD::resource('category', 'CategoryCrudController');
});
Route::get('/', function () {
    return view('welcome');
});
