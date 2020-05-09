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
    return view('home');
});


Route::get('vessel/create', 'VesselController@add')->middleware('auth');
Route::post('vessel/create', 'VesselController@add')->middleware('auth');
Route::get('vessel/edit', 'VesselController@edit')->middleware('auth');
Route::post('vessel/edit', 'VesselController@update')->middleware('auth');
Route::get('vessel/delete', 'VesselController@delete')->middleware('auth');

Route::get('agent/create', 'AgentController@add')->middleware('auth');
Route::post('agent/create', 'AgentController@create')->middleware('auth');

Route::get('product/create', 'ProductController@add')->middleware('auth');
Route::post('product/create', 'ProductController@create')->middleware('auth');
Route::get('product/index', 'ProductController@index')->middleware('auth');
Route::get('product/delete', 'ProductController@delete')->middleware('auth');

Route::get('consignee/create', 'ConsigneeController@add')->middleware('auth');
Route::post('consignee/create', 'ConsigneeController@create')->middleware('auth');
Route::get('consignee/index', 'ConsigneeController@index')->middleware('auth');
Route::get('consignee/delete', 'ConsigneeController@delete')->middleware('auth');


Route::get('/excel', 'ImportExcelController@index');
Route::post('/import_excel/import', 'VesselController@import')->middleware('auth');
Route::get('/export_excel', 'VesselController@export')->name('vessel.export')->middleware('auth');

Route::get('/report', 'ReportController@index');
Route::post('/report/import', 'ReportController@import')->middleware('auth');
Route::get('/report/export', 'ReportController@export')->name('report.export')->middleware('auth');
Route::get('/report/delete', 'ReportController@delete')->name('report.delete')->middleware('auth');

Route::get('/insurance','VesselController@insurance')->middleware('auth');
Route::get('/application','VesselController@application')->middleware('auth');
Route::get('/invoice','VesselController@invoice')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
