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

Route::view('/', 'main');
Route::view('/page', 'page');
Route::view('/product', 'product');
Route::view('/category', 'category');
Route::view('/cart', 'cart');
Route::view('/deal', 'deal');
Route::view('/favourite', 'favourite');



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
    Route::name('cart::add')->post('add', 'CartController@add');
    Route::name('cart::remove')->post('remove', 'CartController@remove');
    Route::name('cart::all')->get('all', 'CartController@getAll');
    Route::name('cart::destroy')->post('destroy', 'CartController@destroy');
});