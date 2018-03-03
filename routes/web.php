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

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/
Route::get('/', function () {
    return view('main');
});

Route::get('/model', function () {
    return view('model');
});

Route::get('/page', function () {
    return view('page');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/category', function () {
    return view('category');
});

Route::post('/product/test', function () {
    return view('test');
});


// Authentification
Auth::routes();

Route::prefix('admin')->namespace('Back')->group(function () {

    Route::middleware('auth')->group(function () {


        Route::name('admin')->get('/', 'AdminController@index');
        Route::view('medias', 'back.medias')->name('medias.index');

        // Products
        Route::resource('products', 'ProductController', [
                'except' => ['show'],
                'names' => [
                    'create'  => 'products.create',
                    'store'   => 'products.store',
                    'edit'    => 'products.edit',
                    'update'  => 'products.update',
                    'destroy' => 'products.destroy'
                ]]
        );


        // Categories
        Route::resource('categories', 'CategoryController', [
                'except' => ['show'],
                'names' => [
                    'create'  => 'categories.create',
                    'store'   => 'categories.store',
                    'edit'    => 'categories.edit',
                    'update'  => 'categories.update',
                    'destroy' => 'categories.destroy'
                ]]
        );
    });
});

/*
|--------------------------------------------------------------------------
| Cart
|--------------------------------------------------------------------------|
*/

Route::prefix('cart')->namespace('Back')->group(function () {
    Route::name('cart::add')->get('add', 'CartController@add');
});