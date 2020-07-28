<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('chat', 'ChatController@Chat');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('send', 'ChatController@send');