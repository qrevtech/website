<?php

Route::get('/', 'QrevController@landing');
Route::get('/share/{ident}', 'QrevController@landing');

Auth::routes();

Route::get('/home', 'HomeController@index');
