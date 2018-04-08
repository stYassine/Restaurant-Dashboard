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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//////////////////////////////////////
/// Admin
//////////////////////////////////////
Route::group(['prefix' => 'dashboard'], function(){

    /// dashboad
    Route::get('/', [
        'uses' => 'DashboardController@index',
        'as' => 'dashboard'
    ]);
    
    
    /// categories
    Route::resource('/categories', 'CategoryController');
    
    /// items
    Route::resource('/items', 'ItemController');
    
    /// reservation
    Route::resource('/reservations', 'ReservationController');
    
    /// sliders
    Route::resource('/sliders', 'SliderController');
    
    /// contact
    Route::resource('/contacts', 'ContactController');
    
    
    
});



//////////////////////////////////////
/// Public
//////////////////////////////////////
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'index'
]);