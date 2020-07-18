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

// use App\Http\Controllers\AdminController;
// use Symfony\Component\Routing\Route;

use App\Http\Controllers\AdminController;
use ILLuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/alternatif_kost', 'KostController@showallAlternatif');
    Route::get('/', 'KostController@dashboard');
    Route::post('/alternatif_kost/store', 'KostController@store');
    Route::post("/alternatif_kost/update/{id}", 'KostController@update');
    Route::get('/alternatif_kost/edit/{id}', 'KostController@edit');
    Route::get('/alternatif_kost/hapus/{id}', 'KostController@hapus');
    Route::get('/profil', 'KostController@profil');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard.view')->middleware('auth:admin');
    Route::get('/login', 'AdminController@loginView')->name('login.admin.view');
    Route::post('/login-admin', 'AdminController@login')->name('login.admin');
    Route::get('/logout', 'AdminController@logout');

});

Route::get('/index', 'KostController@index');
Route::get('/', 'KostController@index');
Route::get('/user', 'weightProductController@show');
Route::get('/rekomend', 'weightProductController@index');
Route::get('/detail/{id}', 'KostController@detailKost');
Route::get('/userinput', function () {
    return view('user');
});

Route::get('/allKost', 'KostController@showallKostData');
Route::get('/about', 'KostController@about');



