<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'LoginController@getIndex');
Route::post('/', 'LoginController@postIndex');
//Route::controller('login', 'LoginController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/', 'LoginController@getIndex');
    Route::post('/', 'LoginController@postIndex');
    Route::get('social/{provider?}', 'LoginController@getSocialAuth');
    Route::get('social/callback/{provider?}', 'LoginController@getSocialAuthCallback');

    Route::group(['middleware' => ['SessionCliente']], function () {

        Route::get('logout', 'LoginController@getLogout');
        Route::get('home', 'HomeController@getIndex');
        Route::get('travels', 'TravelController@getIndex');
        Route::get('travels/{code}', 'TravelController@getTravel');
    });
});
