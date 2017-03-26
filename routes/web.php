<?php

Route::get('/hc', 'QrevController@demo');
Route::get('/hackcity17', 'QrevController@demoShare');
Route::get('/{ident?}', 'QrevController@landing');
