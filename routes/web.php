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
    return view('pegawai.dataPegawai');
});

Route::get('/tambahan', 'tambahanController@insert');

Route::resource('pegawai', 'PegawaiController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
