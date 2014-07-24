<?php

class CaseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /casecontrller
	 *
	 * @return Response
	 */
	public function index()
	{
		$case = TrackedCase::all();

		// load the view and pass the casecntroller
		return View::make('cases.index')
			->with('case', $case);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /casecontrller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cases.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /casecontrller
	 *
	 * @return Response
	 */
	public function store()
	{
		$person = new Person;
		$person->name = Input::get('name',"");
                $person->dob = Input::get('dob',"");
                $person->drugUse = Input::get('drugUse',false);
                $person->physicalAbuse = Input::get('physicalAbuse',false);
                $person->sexAbuse = Input::get('sexAbuse',false);
                $person->mentalHealthTreatment = Input::get('mentalHealthTreatment',false);
                $person->crimeConviction = Input::get('crimeConviction',false);
                $person->employed = Input::get('employed',false);
                $person->fullTime = Input::get('fullTime',false);
                $person->activeMilitary = Input::get('activeMilitary',false);
                $person->sexAbuseSurvivor = Input::get('sexAbuseSurvivor',false);
                $person->originCountry = Input::get('originCountry',"");
                $person->specialNeeds = Input::get('specialNeeds',false);
                $person->disability = Input::get('disability',false);
                $person->language = Input::get('language',"");
                $person->maritalStatus = Input::get('maritalStatus','single');
                $person->address_id = Input::get('address_id',"");
                $person->household_id = Input::get('household_id',"");
                $person->ethnicity_id = Input::get('ethnicity_id',"");
                $person->save();
            
                $child = new AbusedChild;
                $child->person_id        = $person->id;
		$child->parentalHistory  = Input::get('parentalHistory',"");
		$child->parentStatus     = Input::get('parentStatus',"");
                $child->medicalCompleted = Input::get('medicalCompleted',"");
                $child->schoolGrade      = Input::get('schoolGrade',"");
                $child->school           = Input::get('school',"");
                $child->save();
                
                $person1 = new Person;
		$person1->name = Input::get('name',"");
                $person1->dob = Input::get('dob',"");
                $person1->drugUse = Input::get('drugUse',false);
                $person1->physicalAbuse = Input::get('physicalAbuse',false);
                $person1->sexAbuse = Input::get('sexAbuse',false);
                $person1->mentalHealthTreatment = Input::get('mentalHealthTreatment',false);
                $person1->crimeConviction = Input::get('crimeConviction',false);
                $person1->employed = Input::get('employed',false);
                $person1->fullTime = Input::get('fullTime',false);
                $person1->activeMilitary = Input::get('activeMilitary',false);
                $person1->sexAbuseSurvivor = Input::get('sexAbuseSurvivor',false);
                $person1->originCountry = Input::get('originCountry',"");
                $person1->specialNeeds = Input::get('specialNeeds',false);
                $person1->disability = Input::get('disability',false);
                $person1->language = Input::get('language',"");
                $person1->maritalStatus = Input::get('maritalStatus','single');
                $person1->address_id = Input::get('address_id',"");
                $person1->household_id = Input::get('household_id',"");
                $person1->ethnicity_id = Input::get('ethnicity_id',"");
                $person1->save();
                        
                        
                $allegedAbuser = new AllegedAbuser;
                $allegedAbuser->person_id        = $person1->id;
                $allegedAbuser->known            = Input::get('known',false);
                $allegedAbuser->adult            = Input::get('adult',false);
        	$allegedAbuser->save();
            
                $case = new TrackedCase;
                $case->abusedChild_id       = $child->id;
                $case->allegedAbuser_id     =$allegedAbuser->id;
                $case->abuse_id             = Input::get('abuse_id');
                $case->worker_id            = Input::get('worker_id');
		$case->abusedChild_id       = Input::get('abusedChild_id');
		$case->allegedAbuser_id     = Input::get('allegedAbuser_id');
		$case->note                 = Input::get('note');
		$case->caseOpened           = Input::get('caseOpened');
		$case->county_id            = Input::get('county_id');
		$case->DHRCase              = Input::get('DHRCase');
		$case->custodyIssues        = Input::get('custodyIssues', false);
		$case->IOReport             = Input::get('IOReport');
		$case->domesticViolence     = Input::get('domesticViolence',false);
		$case->prosecution          = Input::get('prosecution',false);
		$case->reporter             = Input::get('reporter');
		$case->abuseDate            = Input::get('abuseDate');
		$case->abuseLocation        = Input::get('abuseLocation');
		$case->reportNature         = Input::get('reportNature');
		$case->DHRDetermination     = Input::get('DHRDetermination');
		$case->forensicEvaluation   = Input::get('forensicEvaluation',false);
		$case->status               = Input::get('status');
		$case->parentJurisdiction  = Input::get('parentJurisdiction');
		$case->chargesFiled         = Input::get('chargesFiled');
		$case->agencyReportedTo     = Input::get('agencyReportedTo');
		$case->talkedToChild        = Input::get('talkedToChild');
		$case->reportedDate         = Input::get('reportedDate');
		$case->save();

		// redirect
		Session::flash('message', 'Successfully created case!');
		return Redirect::to('cases');
	}

	/**
	 * Display the specified resource.
	 * GET /casecontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
						// get the case
		$case = TrackedCase::find($id);
		$kid = AbusedChild::find($case->abusedChild_id);
		//$kidInfo = Person::find($kid->person_id);

		// show the view and pass the abuseType to it
		return View::make('cases.show', array('case'=>$case,'kid'=>$kid));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /casecontrller/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$case = TrackedCase::find($id);

		// show the edit form and pass the casecontroller
		return View::make('cases.edit')
			->with('case', $case);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /casecontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$case = TrackedCase::find($id);
                $case->abuse_id             = Input::get('abuse_id');
                $case->worker_id            = Input::get('worker_id');
		$case->abusedChild_id       = Input::get('abusedChild_id');
		$case->allegedAbuser_id     = Input::get('allegedAbuser_id');
		$case->note                 = Input::get('note');
		$case->caseOpened           = Input::get('caseOpened');
		$case->county_id            = Input::get('county_id');
		$case->DHRCase              = Input::get('DHRCase');
		$case->custodyIssues        = Input::get('custodyIssues');
		$case->IOReport             = Input::get('IOReport');
		$case->domesticViolence     = Input::get('domesticViolence');
		$case->prosecution          = Input::get('prosecution');
		$case->reporter             = Input::get('reporter');
		$case->abuseDate            = Input::get('abuseDate');
		$case->abuseLocation        = Input::get('abuseLocation');
		$case->reportNature         = Input::get('reportNature');
		$case->DHRDetermination     = Input::get('DHRDetermination');
		$case->forensicEvaluation   = Input::get('forensicEvaluation');
		$case->status               = Input::get('status');
		$case->parentJurisdiction  = Input::get('parentJurisdiction');
		$case->chargesFiled         = Input::get('chargesFiled');
		$case->agencyReportedTo     = Input::get('agencyReportedTo');
		$case->talkedToChild        = Input::get('talkedToChild');
		$case->reportedDate         = Input::get('reportedDate');
		$case->save();

		// redirect
		Session::flash('message', 'Successfully updated case info!');
		return Redirect::to('cases');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /casecontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$case = TrackedCase::find($id);
		$case->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the case entry!');
		return Redirect::to('cases');
	}

}