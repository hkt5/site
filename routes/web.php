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
Route::get('/services', 'ServiceController@services')->name('services');
Route::get('/services/php', 'ServiceController@php')->name('php');
Route::get('/services/talents', 'ServiceController@talents')->name('talents');
Route::get('/services/candidates', 'ServiceController@candidates')->name('candidates');
Route::get('/services/outsourcing', 'ServiceController@outsourcing')->name('outsourcing');
Route::post('/services/candidate/submission', 'CandidateSubmissioncontroller@create')->name('store-candidate-submission');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
