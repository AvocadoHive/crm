<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Application form
 */

 Route::get('/join/{opening_id}', 'applicantController@applicaton_form');

/**
 *  Show client page 
 */


Route::group(['prefix'=>'dashboard'], function(){

    Route::get('/', 'dashboardController@index');
    Route::get('/client', 'ClientsController@getClientsPage');
    Route::get('/applicants', 'applicantController@list');
    Route::get('/applicant/{id}', 'applicantController@item');
    
});