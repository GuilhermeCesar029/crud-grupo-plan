<?php

use Illuminate\Support\Facades\Route;

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
    return "view('welcome')";
});

Route::get('/show', 'App\Http\Controllers\Api\EletrodomesticoController@index');
Route::post('/create', 'App\Http\Controllers\Api\EletrodomesticoController@create');
Route::get('/show/{id}', 'App\Http\Controllers\Api\EletrodomesticoController@showById');
Route::put('/update/{id}', 'App\Http\Controllers\Api\EletrodomesticoController@update');
Route::delete('/delete/{id}', 'App\Http\Controllers\Api\EletrodomesticoController@delete');
