<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'comicsController@comicsFun');
  
Route::get('/elem/{index}', 'comicsController@getElem')
       ->name('elem');