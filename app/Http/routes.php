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

Route::get('/', 'MessagesController@index');

// create: 新規作成用のフォームページ
Route::get('messages/create', 'MessagesController@create')->name('messages.create');

// CRUD
Route::get('messages/{id}', 'MessagesController@show')->name('messages.show');
Route::post('messages', 'MessagesController@store')->name('messages.store');
Route::put('messages/{id}', 'MessagesController@update')->name('messages.update');
Route::delete('messages/{id}', 'MessagesController@destroy')->name('messages.destroy');

// index: showの補助ページ
Route::get('messages', 'MessagesController@index');



// edit: 更新用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');