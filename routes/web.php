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

Route::get('/', 'KostController@dashboard');
Route::get('/alternatif_kost', 'KostController@showallAlternatif');

Route::post('/alternatif_kost/store', 'KostController@store');
Route::post("/alternatif_kost/update/{id}",'Kostcontroller@update');

Route::get('/alternatif_kost/edit/{id}', 'KostController@edit');
Route::get('/alternatif_kost/hapus/{id}', 'KostController@hapus');

Route::get('/profil', 'AdminController@profil');

Route::get('/index','KostController@index');
Route::get('/user','weightProductController@show');