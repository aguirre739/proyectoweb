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
use GuzzleHttp\Client;

Route::get('/', function () {

    $client = new Client([
        'base_uri' => 'https://apis.datos.gob.ar/georef/api/',
        'timeout' => 2.0,
    ]);

        
    $reponse = $client->request('GET','calles?departamento=90084&max=1500');
    
    $cal = json_decode($reponse -> getBody()->getContents());


    return view('welcome', ['calles' => $cal->calles]);
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio', 'InicioController@index')->name('inicio');
