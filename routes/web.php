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
    return view('welcome');
});



Route::get('/penonton','PenontonController@penonton');
Route::post('/penonton/proses','PenontonController@proses');

Route::get('/penonton','PenontonController@index');

Route::get('/penonton/tambah','PenontonController@tambah');
Route::post('/penonton/store','PenontonController@store');


Route::get('/penonton/edit/{id}','PenontonController@edit');
Route::post('/penonton/update','PenontonController@update');

Route::get('/penonton/hapus/{id}','PenontonController@hapus');
 
//Route::get('/penonton','PenontonController@index');
//Route::get('/penonton/hapus/{id}','PenontonController@hapus');

