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

        // Notifications
        Route::name('notifications.index')->get('notifications/{user}', 'NotificationController@index');
        Route::name('notifications.update')->put('notifications/{notification}', 'NotificationController@update');
        // Medias
        Route::view('medias', 'back.medias')->name('medias.index');

        // Categories
        Route::resource('categories', 'CategoryController', ['except' => 'show']);

        // Settings
        Route::name('settings.edit')->get('settings', 'AdminController@settingsEdit');
        Route::name('settings.update')->put('settings', 'AdminController@settingsUpdate');

    });

});
