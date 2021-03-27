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
    return view('home');
Route::post('menu', 'MenuController@index')->name('menu.index');
Route::post('sequencer', 'SequencerController@index')->name('sequencer.index');
Route::post('home', 'HomeController@index')->name('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');