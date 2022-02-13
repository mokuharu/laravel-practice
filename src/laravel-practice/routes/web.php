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

Route::get('/', 'TopController@getIndex');

Route::get('create', function(){
    return view('contents.create');
});

Route::get('/list', "PenaltyGameController@list");
Route::get('/list/{member_id}', 'PenaltyGameController@listByMember');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
