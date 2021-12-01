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
Route::get('/ahg', function () {
    return view('Dachboard.solide');
});
Route::get('Exports', 'TransporteurController@indexx')->name('indexx');
Route::get('Bennes', 'BenneController@Bennes')->name('bennes');
Route::put('ChangeStatus/{transporteur}', 'TransporteurController@Inactive')->name('Inactive');
Route::put('Change/{transporteur}', 'TransporteurController@Active')->name('Active');

Route::get('/home','HomeController@index')->name('home');
Route::get('/shwo/{transporteur}','TransporteurController@afficher')->name('afficher');
Route::get('/affete','BenneController@affecter')->name('benne.benneAffecter');
Route::get('/nonaffete','BenneController@nonAffecter')->name('benne.benneNonAffecter');
Route::post('/affete','BenneController@storeTransporteur')->name('benne.storeTransporteur');
Route::get('/homee','HomeController@index');
Route::get('generate-pdf','BenneController@generatePDF')->name('generatePDF');
Route::get('ExportView', 'TransporteurController@iExportView');
Route::get('export', 'BenneController@export')->name('export');
Route::get('pdf-file','BenneController@generatePDF')->name('generatePDF');
Route::get('ExportView', 'TransporteurController@iExportView');
Route::get('exports', 'TransporteurController@exports')->name('exports');
Auth::routes();

Route::resource('trans','TransporteurController');
Route::resource('benne','BenneController');
Route::get('/export-pdf','TransporteurController@PDF')->name('exportPdf');