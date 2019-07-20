<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/connexion','ConnexionController@connect');

Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/inscription' , 'ConnexionController@inscriptionChoix');

Route::get('/inscriptionU' , 'ConnexionController@inscriptionform');

Route::post('/inscriptionU' , 'ConnexionController@addUser');

Route::get('/inscriptionF' , 'ConnexionController@inscriptionformFour');

Route::post('/inscriptionF' , 'ConnexionController@addFour');

Route::get('/dec','ConnexionController@dec');

Route::get('/store','StoreController@list');