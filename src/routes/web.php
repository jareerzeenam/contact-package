<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Jareer\Contact\Http\Controllers'], function () {

    Route::resource('contact', 'ContactController');

    // Route::get('contact', 'ContactController@index')->name('contact');

});



