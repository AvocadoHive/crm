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

    /**
     * clients routes
     */
    /**
     * add new client form
     */
    Route::get('/client/add', 'ClientsController@addClientPage');
    
    /**
     * process new client
     */
    Route::post('/client/add', 'ClientsController@processClient');

    /**
     * list of clients
     * page - identify the paginated page loaded
     */
    Route::get('/client/list/{page}', 'ClientsController@getClientsListPage');

    Route::get('/client/{id}', 'ClientsController@getClientsPage');
        
        

    /**
     * Applicants routes
     */
    Route::get('/applicants', 'applicantController@list');
    Route::get('/applicant/{id}', 'applicantController@item');
    
});