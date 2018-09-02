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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('get_pdf', [ 'as' => 'rekap.download', 'uses' => 'RekapController@download']);
// Route::get('rekap/{tanggal}/pdf', ['as' => 'rekap.pdf', 'uses' => 'RekapController@getPdf']);
// Route::get('rekap/{tanggal}', ['as' => 'rekap.show', 'uses' => 'RekapController@show']);
Route::get('rekap', 'RekapController@index');
Route::get('get_excel', [ 'as' => 'exports/kta', 'uses' => 'ktaController@export']);

Route::resource('kta','ktaController');
Route::resource('ktanew','ktanewController');

Route::resource('sbujk','sbujkController');
Route::resource('sbujknew','sbujknewController');