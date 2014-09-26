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

Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');


// Secure-Routes
Route::group(array('before' => 'auth'), function()
{
    Route::get('/', function() {
        $case = TrackedCase::where('worker_id', Auth::User()->worker_id)->get();
        return View::make('home')->with('case', $case);
    });
    
    Route::resource('users', 'UserController');
    
    Route::group(array('before' => 'level:3'), function()
    {
        Route::get('/admin', function() {
            return View::make('admin');
        });

    });

//<editor-fold desc="Resorce routs">
Route::resource('abuseTypes', 'AbuseTypeController');
Route::resource('cases', 'CaseController');
Route::resource('children', 'AbusedChildController');
Route::resource('relatives', 'relativeController');
Route::resource('people', 'PersonController');
Route::resource('workers', 'WorkersController');
Route::resource('serviceType', 'ServiceTypeController');
Route::resource('session', 'SessionController');
Route::resource('sessionNotes', 'SessionNotesController');
Route::resource('workerType', 'WorkerTypeController');
Route::resource('relativeType', 'RelativeTypeController');
Route::resource('ethnicity', 'EthnicityController');
Route::resource('allegedOffenders', 'AllegedOffenderController');
Route::resource('county', 'CountyController');
Route::resource('households','HouseholdController');
Route::resource('DHRCases', 'DHRCasesController');
Route::resource('school', 'SchoolController');
Route::resource('countryOrigen', 'CountryOrigenController');
Route::resource('sessionNotes', 'SessionNotesController');
Route::resource('allegedOffenders','allegedOffenderController');
//</editor-fold>

//<editor-fold desc="Post routs">
Route::post('cases/{id}/addWorker', 'CaseController@addWorker');
Route::post('cases/{id}/removeWorker', 'CaseController@removeWorker');
Route::post('cases/{id}/addAbuseType', 'CaseController@addAbuseType');
Route::post('cases/{id}/removeAbuseType', 'CaseController@removeAbuseType');
Route::post('people/search', 'PersonController@search');
Route::post('people/searchOutside', 'PersonController@searchOutside');
Route::post('address/search', 'AddressController@search');
//</editor-fold>

//<editor-fold desc="Child routs">

Route::get('cases/{id}/child', function($id) {
    $child = TrackedCase::find($id)->abusedChild;
    return View::make('children.show')
                    ->with('child', $child);
});

Route::get('cases/{id}/child/edit', function($id) {
    $child = TrackedCase::find($id)->abusedChild;
    Session::put('from','cases/'.$id.'/child');
    return View::make('children.edit')
                    ->with('child', $child);
});

//</editor-fold>

//<editor-fold desc="Alleged Offender routs">
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

Route::get('cases/{id}/child/allegedOffenders/create', function($id) {
    $child_id = TrackedCase::find($id)->abusedChild_id;
    $county_id = TrackedCase::find($id)->county_id;
    Session::put('from','cases/'.$id);
		return View::make('allegedOffenders.create')
                        ->with(array('id' => $child_id, 'case_id' => $id, 'county_id' => $county_id));
});
//</editor-fold>

//<editor-fold desc="Worker routs">
Route::get('cases/{id}/workers', function($id) {
    $workers = TrackedCase::find($id)->workers;
    return View::make('workers.index')
                    ->with('workers', $workers);
});
//</editor-fold>

//<editor-fold desc="Relations routs">

Route::get('cases/{id}/child/relations', function($id) {
    $relation = TrackedCase::find($id)->abusedChild->relations;
    return View::make('relatives.index')
                    ->with('relatives', $relation);
});

Route::get('cases/{id}/child/relations/create', function($id) {
    $child_id = TrackedCase::find($id)->abusedChild_id;
    $county_id = TrackedCase::find($id)->county_id;
    Session::put('from','cases/'.$id);
		return View::make('relatives.create')
                        ->with(array('id' => $child_id, 'case_id' => $id, 'county_id' => $county_id));
});

Route::get('cases/{id}/child/relations/{realtion_id}/edit',function($id, $relation_id){
    $person = Relationship::find($relation_id);
    $child_id = TrackedCase::find($id)->abusedChild_id;
    $county_id = TrackedCase::find($id)->county_id;
    Session::put('from','cases/'.$id);
		return View::make('relatives.edit')
                        ->with(array('id' => $child_id, 'case_id' => $id, 
                            'county_id' => $county_id, 'relative'=>$person));
   
});

Route::get('cases/{id}/child/relations/{realtion_id}',function($id, $relation_id){
    $person = Relationship::find($relation_id);
    Session::put('from','cases/'.$id);
           return View::make('relatives.show')
                   ->with('relative',$person);
});
//</editor-fold>

//<editor-fold desc="Session routs">
Route::get('cases/{id}/child/session', function($id) {
    $session = TrackedCase::find($id)->abusedChild->sessions;
    return View::make('session.index')
                    ->with(array('session'=> $session,'case'=>$id));
});

Route::get('cases/{id}/child/session/create', function($id) {
    $child_id = TrackedCase::find($id)->abusedChild_id;
    Session::put('from','cases/'.$id);
		return View::make('session.create')->with('child_id', $child_id);
});
Route::get('cases/{id}/child/session/{session_id}/show', function($id,$session_id) {
    $child_id = TrackedCase::find($id)->abusedChild_id;
    $sessionid = CaseSession::find($session_id);
    Session::put('from','cases/'.$id);
		return View::make('session.show')
                        ->with(array('child_id'=> $child_id,'case'=>$id,'session'=>$sessionid));
});

Route::get('cases/{id}/child/session/{session_id}/edit', function($id,$session_id) {
    $child_id = TrackedCase::find($id)->abusedChild_id;
    $sessionid = CaseSession::find($session_id);
    Session::put('from','cases/'.$id.'/child/session');
		return View::make('session.edit')
                        ->with(array('child_id'=> $child_id,'case'=>$id,'session'=>$sessionid));
});
//</editor-fold>

//<editor-fold desc="Household routs">
Route::get('cases/{id}/child/household', function($id) {
    $house = TrackedCase::find($id)->abusedChild->personalInfo->household;
    return View::make('households.show')
                    ->with('household', $house);
});

Route::get('cases/{id}/child/household/edit', function($id) {
    $house = TrackedCase::find($id)->abusedChild->personalInfo->household;
    Session::put('from','cases/'.$id.'/child/household');
    return View::make('households.edit')
                    ->with('household', $house);
});
//</editor-fold>

//<editor-fold desc="Relation-Person routs">
Route::get('cases/{id}/child/relations/{realtion_id}/person',function($id, $relation_id){
   $person = Relationship::find($relation_id)->personalInfo;
           return View::make('people.show')
                   ->with('person',$person);
});

Route::get('cases/{id}/child/relations/{realtion_id}/person/edit',function($id, $relation_id){
   $person = Relationship::find($relation_id)->personalInfo;
    Session::put('from','cases/'.$id);
           return View::make('people.edit')
                   ->with('person',$person);
    
});
//</editor-fold>

//<editor-fold desc="Session Notes routs">
Route::get('cases/{id}/child/session/{session_id}/sessionNotes/create', function($id,$session_id) {
    $child_id = TrackedCase::find($id)->abusedChild_id;
    Session::put('from','cases/'.$id.'/child/session/'.$session_id.'/show');
		return View::make('sessionNotes.create')
                        ->with(array('child_id'=> $child_id,'case'=>$id,'session'=>$session_id));
});
Route::get('cases/{id}/child/session/{session_id}/sessionNotes/{note_id}/edit', function($id,$session_id,$note_id) { 
    $child_id = TrackedCase::find($id)->abusedChild_id;
    $sessionid = CaseSession::find($session_id);
    Session::put('from','cases/'.$id.'/child/session/'.$session_id.'/show');
    $note = SessionNote::find($note_id);
		return View::make('sessionNotes.edit')
                        ->with(array('child_id'=> $child_id,'case'=>$id,'session'=>$sessionid, 'sessionNotes'=>$note));
});

//</editor-fold>

});//end of users
