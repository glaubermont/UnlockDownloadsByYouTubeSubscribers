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

Route::get('/','FilesController@index');

Route::get('home', function () {
    return view('home');
});

Route::get('files','FilesController@index');

Route::get('home', 'FilesController@index')->name('home');

Route::post('download/{id}','DownloadController@downloadFile')->name('downloadFile');
Route::get('download/{id}', 'DownloadController@post')->name('download');




    
