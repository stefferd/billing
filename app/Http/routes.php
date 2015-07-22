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

Route::get('/', function() {
    return view('app');
});
Route::group(['prefix' => 'api/v1/'], function() {
    Route::resource('user', 'UserController');
    Route::resource('company', 'CompanyController');
    Route::resource('projects', 'ProjectController');
    Route::get('projects/bycompany/{company}', 'ProjectController@getByCompany');
    Route::resource('miles', 'MilesController');
    Route::resource('hours', 'TimeController');
    Route::post('login', 'UserController@login');
    Route::get('logout', 'UserController@logout');
});