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

Route::get('/', 'IndexController@index')->name('home');
Route::get('/benih', 'BenihController@index')->name('benih');
Route::get('/benih/{id}', 'BenihController@show')->name('benih.show');
Route::get('/benih/tempat/{id}', 'BenihController@show2')->name('benih.show2');
Route::delete('/benih/{id}', 'BenihController@delete')->name('benih.delete');
Route::get('/tambahbenih', 'BenihController@tambah')->name('benih.index');
Route::post('/tambahbenih', 'BenihController@store')->name('benih.simpan');
Route::get('/benih/edit/{id}', 'BenihController@edit')->name('benih.edit');
Route::post('/benih/edit/{id}', 'BenihController@update')->name('benih.update');
Route::get('/berita', 'BeritaController@index')->name('berita');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');
Route::delete('/berita/{id}', 'BeritaController@delete')->name('berita.delete');
Route::get('/tambahberita', 'BeritaController@tambah')->name('berita.index');
Route::post('/tambahberita', 'BeritaController@store')->name('berita.simpan');
Route::get('/berita/edit/{id}', 'BeritaController@edit')->name('berita.edit');
Route::post('/berita/edit/{id}', 'BeritaController@update')->name('berita.update');
Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::delete('/galeri/{id}', 'GaleriController@delete')->name('galeri.delete');
Route::post('/galeri', 'GaleriController@store')->name('galeri.simpan');
Route::get('/print1', 'IndexController@print1')->name('print1');

Auth::routes();

Route::get('/home', 'HomeController@index');
