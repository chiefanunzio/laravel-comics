<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'comicsController@comicsFun')
       ->name('home');
  
Route::get('/elem/{index}', 'comicsController@getElem')
       ->name('elem');