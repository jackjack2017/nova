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

//Route::view('/', 'main');
//Route::view('/page', 'page');
//Route::view('/product', 'product');
//Route::view('/category', 'category');
//Route::view('/cart', 'cart');
Route::view('/deal', 'deal');
Route::view('/new', 'new');
Route::view('/top', 'top');
Route::view('/actions', 'actions');
Route::view('/search', 'search');

Route::post('/test', function () {
   return view('test');
});
Route::name('showMoreProducts')->post('/showMore', 'FrontController@showMore');

Route::name('product')->get('/product/{product_slug}/{product_id}', 'FrontController@product');
Route::name('home')->get('/', 'FrontController@index');
Route::name('page')->get('page/{id?}', 'FrontController@page');

Route::name('favourite')->get('favourite', 'FrontController@favourite');
Route::name('cart')->get('cart', 'FrontController@cart');


//
//
////Route::get('/category', function () {
////    return view('category');
////});
Route::name('category')->get('category/{id}', 'FrontController@category');
//

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
        Route::put('import', [
            'as' => 'products.import',
            'uses' => 'ExcellController@import'
        ]);

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
//    Route::name('cart::like')->post('like/add', 'CartController@like');
});
Route::namespace('Back')->group(function () {
    Route::name('cart::like')->post('like/add', 'CartController@like');
});

