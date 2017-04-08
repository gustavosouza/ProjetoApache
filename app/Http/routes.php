<?php

Route::get('/', 'IndexController@inicia');
Route::get('/home', 'IndexController@inicia');


Route::get('/historia', 'IndexController@iniciaHistoria');
Route::get('/noticia', 'IndexController@iniciaNoticia');