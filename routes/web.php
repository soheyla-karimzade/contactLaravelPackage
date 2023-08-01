<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Daa\Contact\Http\Controllers'], function()
{
    Route::get('contact', 'ContactController@show');

    Route::post('contact', 'ContactController@send')->name('contact');
});

