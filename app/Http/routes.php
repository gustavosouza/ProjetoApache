<?php
Route::get('/', 'IndexController@inicia');
Route::get('/home', 'IndexController@inicia');

Route::get('/Cliente/lista','ClienteController@lista');
Route::get('/Cliente/novo','ClienteController@novo');
Route::get('/Cliente/editar/{id}','ClienteController@editar');
Route::get('/Cliente/excluir/{id}','ClienteController@excluir');
Route::post('/Cliente/salvar','ClienteController@salvar');
