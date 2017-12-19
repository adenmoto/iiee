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

/*Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');
Route::get('/generate', 'PagesController@generate');*/

Route::get('/', 'PagesController@index');

//about page
Route::get('/about', 'PagesController@about');
Route::get('/vision', 'PagesController@vision');
Route::get('/codeethics','PagesController@codeethics');
Route::get('/objectives','PagesController@objectives');

//issuances page
Route::get('/issuances','PagesController@issuances');

//contact us page
Route::get('/contactus','PagesController@contactus');
Route::get('/membershipdept','PagesController@membershipdept');
Route::get('/admindept','PagesController@admindept');
Route::get('/marketingdept','PagesController@marketingdept');
Route::get('/financedept','PagesController@financedept');
Route::get('/pimis','PagesController@pimis');
Route::get('/calendar','PagesController@calendar');
Route::get('/registration','PagesController@registration');

//job opportunities pages
Route::get('/jobopportunities','PagesController@jobopportunities');
Route::get('/jobopportunities2', 'PagesController@jobopportunities2');
Route::get('/jobopportunities3', 'PagesController@jobopportunities3');