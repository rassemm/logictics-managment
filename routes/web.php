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
| affichage mtaa les transporteurs wl bennes affecte 

liste des bennes non affecteer 7el wtsp
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','HomeController@index')->name('home');
Route::get('/affete','BenneController@affecter')->name('benne.benneAffecter');
Route::get('/nonaffete','BenneController@nonAffecter')->name('benne.benneNonAffecter');
Route::post('/affete','BenneController@storeTransporteur')->name('benne.storeTransporteur');
Route::get('/homee','HomeController@index');

Auth::routes();

Route::resource('trans','TransporteurController');
Route::resource('benne','BenneController');