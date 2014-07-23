<?php

class AllegedAbuserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /allegedAbusers
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the allegedAbusers
		$allegedAbusers = AllegedAbuser::all();

		// load the view and pass the allegedAbusers
		return View::make('allegedAbusers.index')
			->with('allegedAbusers', $allegedAbusers);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /allegedAbusers/create
	 *
	 * @return Response
	 */
	public function create()
	{
                // load the create form (app/views/allegedAbusers/create.blade.php)
		return View::make('allegedAbusers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /allegedAbusers
	 *
	 * @return Response
	 */
	public function store()
	{
            
                        $person = new Person;
			$person->name = Input::get('name');
                        $person->dob = Input::get('dob');
                        $person->drugUse = Input::get('drugUse',false);
                        $person->physicalAbuse = Input::get('physicalAbuse',false);
                        $person->sexAbuse = Input::get('sexAbuse',false);
                        $person->mentalHealthTreatment = Input::get('mentalHealthTreatment',false);
                        $person->crimeConviction = Input::get('crimeConviction',false);
                        $person->employed = Input::get('employed',false);
                        $person->fullTime = Input::get('fullTime',false);
                        $person->activeMilitary = Input::get('activeMilitary',false);
                        $person->sexAbuseSurvivor = Input::get('sexAbuseSurvivor',false);
                        $person->originCountry = Input::get('originCountry');
                        $person->specialNeeds = Input::get('specialNeeds',false);
                        $person->disability = Input::get('disability',false);
                        $person->language = Input::get('language');
                        $person->maritalStatus = Input::get('maritalStatus','single');
                        $person->address_id = Input::get('address_id');
                        $person->household_id = Input::get('household_id');
                        $person->ethnicity_id = Input::get('ethnicity_id');
			$person->save();
                        
                        
                        $allegedAbuser = new AllegedAbuser;
			$allegedAbuser->person_id        = $person->id;
                        $allegedAbuser->known            = Input::get('known',false);
                        $allegedAbuser->adult            = Input::get('adult',false);
			$allegedAbuser->save();

			// redirect
			Session::flash('message', 'Successfully stored allegedAbuser info!');
			return Redirect::to('allegedAbusers');
	}

	/**
	 * Display the specified resource.
	 * GET /allegedAbusers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
                // get the allegedAbuser
		$allegedAbuser = AllegedAbuser::find($id);

		// show the view and pass the nerd to it
		return View::make('allegedAbusers.show')
			->with('allegedAbuser', $allegedAbuser);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /allegedAbusers/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                // get the allegedAbuser
		$allegedAbuser = AllegedAbuser::find($id);

		// show the view and pass the nerd to it
		return View::make('allegedAbusers.edit')
			->with('allegedAbuser', $allegedAbuser);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /allegedAbusers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
                        $allegedAbuser = AllegedAbuser::find($id);
                        $person = $allegedAbuser->personalInfo;
                        $person->name = Input::get('name');
                        $person->dob = Input::get('dob]');
                        $person->drugUse = Input::get('drugUse',false);
                        $person->physicalAbuse = Input::get('physicalAbuse',false);
                        $person->sexAbuse = Input::get('sexAbuse',false);
                        $person->mentalHealthTreatment = Input::get('mentalHealthTreatment',false);
                        $person->crimeConviction = Input::get('crimeConviction',false);
                        $person->employed = Input::get('employed',false);
                        $person->fullTime = Input::get('fullTime',false);
                        $person->activeMilitary = Input::get('activeMilitary',false);
                        $person->sexAbuseSurvivor = Input::get('sexAbuseSurvivor',false);
                        $person->originCountry = Input::get('originCountry');
                        $person->specialNeeds = Input::get('specialNeeds',false);
                        $person->disability = Input::get('disability',false);
                        $person->language = Input::get('language');
                        $person->maritalStatus = Input::get('maritalStatus','single');
                        $person->address_id = Input::get('address_id');
                        $person->household_id = Input::get('household_id');
                        $person->ethnicity_id = Input::get('ethnicity_id');
                        $person->save();
                        
                        
			$allegedAbuser->person_id        = $person->id;
                        $allegedAbuser->known            = Input::get('known',false);
                        $allegedAbuser->adult            = Input::get('adult',false);
			$allegedAbuser->save();

			// redirect
			Session::flash('message', 'Successfully updated allegedAbuser info!');
			return Redirect::to('allegedAbusers');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /allegedAbusers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$allegedAbuser = AllegedAbuser::find($id);
		$allegedAbuser->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the allegedAbuser entry!');
		return Redirect::to('allegedAbusers');
	}

}