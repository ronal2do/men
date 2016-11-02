<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('/release', function () {
    return view('pages.release');
});
Route::get('/nasuafesta', function () {
    return view('pages.nasuafesta');
});

Route::get('/contratante',    'WelcomeController@getDownload');
Route::post('/newsletter',    'WelcomeController@postNews');

Route::auth();

Route::get('/home',          'HomeController@index');
Route::post('/criaragenda',  'HomeController@criarAgenda');
Route::post('/criaragenda',  'HomeController@criarAgenda');
Route::get('/{id}/deletar',  'HomeController@deletaAgenda');
Route::post('/criarcontato', 'HomeController@criarContato');
Route::get('/{id}/cdeletar', 'HomeController@deletaContato');
Route::get('/{id}/ndeletar', 'HomeController@deletaNewsletter');
