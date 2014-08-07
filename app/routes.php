<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */




Route::resource('abuseTypes', 'AbuseTypeController');

Route::resource('cases', 'CaseController');

Route::resource('children', 'AbusedChildController');

Route::resource('relatives', 'relativeController');

Route::resource('people', 'PersonController');

Route::resource('workers', 'WorkersController');

Route::resource('serviceType', 'ServiceTypeController');

Route::resource('session', 'SessionController');

Route::get('cases/{id}/child', function($id) {
    $child = TrackedCase::find($id)->abusedChild;
    return View::make('children.show')
                    ->with('child', $child);
});

Route::get('cases/{id}/child/edit', function($id) {
    $child = TrackedCase::find($id)->abusedChild;
    Session::put('from','cases/'.$id);
    return View::make('children.edit')
                    ->with('child', $child);
});

Route::resource('workerType', 'WorkerTypeController');

Route::resource('relativeType', 'RelativeTypeController');

Route::resource('phones', 'PhonesController');

Route::resource('ethnicity', 'EthnicityController');

Route::resource('address', 'AddressController');

Route::resource('allegedOffenders', 'AllegedOffenderController');

Route::resource('county', 'CountyController');

Route::resource('households','HouseholdController');

Route::get('cases/{id}/allegedOffenders', function($id) {
    $allegedOffender = TrackedCase::find($id)->allegedOffenders;
    return View::make('allegedOffenders.index')
                    ->with('allegedOffenders', $allegedOffender);
});

Route::get('cases/{id}/allegedOffenders/edit', function($id) {
    $child = TrackedCase::find($id)->allegedOffenders;
    Session::put('from','cases/'.$id);
    return View::make('children.edit')
                    ->with('child', $child);
});

Route::get('cases/{id}/workers', function($id) {
    $workers = TrackedCase::find($id)->workers;
    return View::make('workers.index')
                    ->with('workers', $workers);
});

Route::post('cases/{id}/addWorker', 'CaseController@addWorker');
Route::post('cases/{id}/removeWorker', 'CaseController@removeWorker');

Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');

// Secure-Routes
Route::group(array('before' => 'auth'), function()
{
    Route::get('/', function() {
        return View::make('home');
    });
    
    Route::resource('users', 'UserController');
    
    Route::group(array('before' => 'level:3'), function()
    {
        Route::get('/admin', function() {
            return View::make('admin');
        });

    });

    
});

Route::get('cases/{id}/child/relations', function($id) {
    $relation = TrackedCase::find($id)->abusedChild->relations;
    return View::make('relatives.index')
                    ->with('relatives', $relation);
});

Route::get('cases/{id}/child/relations/create', function($id) {
    $child_id = TrackedCase::find($id)->abusedChild_id;
		return View::make('relatives.create')->with('id', $child_id);
});
