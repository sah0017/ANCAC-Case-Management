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


Route::get('/', function() {
    return View::make('pages.home');
});
Route::get('about', function() {
    return View::make('pages.about');
});
Route::get('projects', function() {
    return View::make('pages.projects');
});
Route::get('contact', function() {
    return View::make('pages.contact');
});

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