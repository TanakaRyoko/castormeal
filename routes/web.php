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


Route::get('vessel/create', 'VesselController@add')->middleware('auth');
Route::post('vessel/create', 'VesselController@add')->middleware('auth');
Route::get('vessel/edit', 'VesselController@edit')->middleware('auth');
Route::post('vessel/edit', 'VesselController@update')->middleware('auth');
Route::get('vessel/delete', 'VesselController@delete')->middleware('auth');

Route::get('agent/create', 'AgentController@add')->middleware('auth');
Route::post('agent/create', 'AgentController@create')->middleware('auth');

Route::get('/excel', 'ImportExcelController@index');
Route::post('/import_excel/import', 'ImportExcelController@import');
Route::get('/export_excel', 'ImportExcelController@export');

Route::get('/export_excel', 'ExportExcelController@index');
Route::get('/export_excel/excel', 'ImportExcelController@export')->name('export_excel.excel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
