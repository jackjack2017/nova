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


/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------|
*/

Route::prefix('admin')->namespace('Back')->group(function () {

    Route::middleware('auth')->group(function () {


        Route::name('admin')->get('/', 'AdminController@index');

//        // Notifications
//        Route::name('notifications.index')->get('notifications/{user}', 'NotificationController@index');
//        Route::name('notifications.update')->put('notifications/{notification}', 'NotificationController@update');
        // Medias
        Route::view('medias', 'back.medias')->name('medias.index');

        // Categories
        Route::resource('categories', 'CategoryController', ['except' => 'show']);


        // Settings
        Route::name('settings.edit')->get('settings', 'AdminController@settingsEdit');
        Route::name('settings.update')->put('settings', 'AdminController@settingsUpdate');



        // Products
//        Route::resource('products', 'ProductController', ['except' => 'show']);


//        Route::get('products/{gender}', [
//            'as' => 'products.index',
//            'uses' => 'ProductController@index'
//        ]);

//        Route::get('products/create', [
//            'as' => 'products.create',
//            'uses' => 'ProductController@create'
//        ]);
//
//        Route::post('products', [
//            'as' => 'products.store',
//            'uses' => 'ProductController@store'
//        ]);
//        //Architect control
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

    });




});
