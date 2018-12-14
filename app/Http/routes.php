<?php


Route::get('/', 'ProdutosController@lista');


Route::get('/produtos/mostrar/{id}', 'ProdutosController@mostrar');

Route::get('/produtos/novo', 'ProdutosController@novo');

Route::post('/produtos/adiciona', 'ProdutosController@adiciona');

Route::get('/produtos/delete/{id}', 'ProdutosController@delete');

Route::get('/produtos/alterar/{id}', 'ProdutosController@alterar');

Route::post('/produtos/update', 'ProdutosController@update');

Route::get('/produtos/categoria', 'CategoriaController@index');
Route::post('/produtos/adciona', 'CategoriaController@create');
Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::get('home', 'HomeController@index');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);