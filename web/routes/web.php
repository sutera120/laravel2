<?php

use App\Http\Middleware\HelloMiddleware;

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

Route::get('/hello', 'HelloController@index')
    ->middleware('MyMW');


Route::get('/hello/{id}', 'HelloController@index')
    ->middleware(App\Http\Middleware\MyMiddleware::class);

Route::get('/hello/other', 'HelloController@other');

Route::get('/sample', 'Sample\SampleController@index')->name('sample');

Route::get('/hello/{id}', 'HelloController@index')->where('id', '[0-9]+');
