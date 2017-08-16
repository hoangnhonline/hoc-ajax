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

Route::get('/ajax/view-child', ['as' => 'view-child', 'uses' => 'AjaxController@viewChild']);
Route::get('/ajax/get-child', ['as' => 'get-child', 'uses' => 'AjaxController@getChild']);
