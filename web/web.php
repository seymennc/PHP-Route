<?php

/*------------------------------------------------
| Route
|-------------------------------------------------
|
| This file only handles route requests
|
--------------------------------------------------*/


use Luminance\Service\phproute\Route\Route;

Route::method('get')->route('/', 'HomeController@index')->name('home');

Route::prefix('test')->group(function () {
    Route::method('post')->route('/post', 'HomeController@post')->name('post');
    Route::method('get')->route('/index', 'HomeController@index')->name('test');
});

