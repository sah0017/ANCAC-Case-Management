<?php

class PersonController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /people
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the people
		$people = Person::all();

		// load the view and pass the people
		return View::make('people.index')
			->with('people', $people);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /people/create
	 *
	 * @return Response
	 */
	public function create()
	{
                // load the create form (app/views/people/create.blade.php)
		return View::make('people.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /people
	 *
	 * @return Response
	 */
	public function store()
	{
                        $person = new Person;
			$person->name = Input::get('name');
                        $person->dob = Input::get('dob');
                        $person->drugUse = Input::get('drugUse');
                        $person->physicalAbuse = Input::get('physicalAbuse');
                        $person->sexAbuse = Input::get('sexAbuse');
                        $person->mentalHealthTreatment = Input::get('mentalHealthTreatment');
                        $person->crimeConviction = Input::get('crimeConviction');
                        $person->employed = Input::get('employed');
                        $person->fullTime = Input::get('fullTime');
                        $person->activeMilitary = Input::get('activeMilitary');
                        $person->sexAbuseSurvivor = Input::get('sexAbuseSurvivor');
                        $person->originCountry = Input::get('originCountry');
                        $person->specialNeeds = Input::get('specialNeeds');
                        $person->disability = Input::get('disability');
                        $person->language = Input::get('language');
                        $person->maritalStatus = Input::get('maritalStatus');
                        $person->address_id = Input::get('address_id');
                        $person->household_id = Input::get('househole_id');
                        $person->ethnicity_id = Input::get('ethnicity_id');
			$person->save();

			// redirect
			Session::flash('message', 'Successfully stored person info!');
			return Redirect::to('people');
	}

	/**
	 * Display the specified resource.
	 * GET /people/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
                // get the person
		$person = Person::find($id);

		// show the view and pass the nerd to it
		return View::make('people.show')
			->with('person', $person);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /people/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                // get the person
		$person = Person::find($id);

		// show the view and pass the nerd to it
		return View::make('people.edit')
			->with('person', $person);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /people/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
                        $person = Person::find($id);
			$person->name = Input::get('name');
                        $person->dob = Input::get('dob');
                        $person->drugUse = Input::get('drugUse');
                        $person->physicalAbuse = Input::get('physicalAbuse');
                        $person->sexAbuse = Input::get('sexAbuse');
                        $person->mentalHealthTreatment = Input::get('mentalHealthTreatment');
                        $person->crimeConviction = Input::get('crimeConviction');
                        $person->employed = Input::get('employed');
                        $person->fullTime = Input::get('fullTime');
                        $person->activeMilitary = Input::get('activeMilitary');
                        $person->sexAbuseSurvivor = Input::get('sexAbuseSurvivor');
                        $person->originCountry = Input::get('originCountry');
                        $person->specialNeeds = Input::get('specialNeeds');
                        $person->disability = Input::get('disability');
                        $person->language = Input::get('language');
                        $person->maritalStatus = Input::get('maritalStatus');
                        $person->address_id = Input::get('address_id');
                        $person->household_id = Input::get('househole_id');
                        $person->ethnicity_id = Input::get('ethnicity_id');
			$person->save();

			// redirect
			Session::flash('message', 'Successfully updated person info!');
			return Redirect::to('people');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /people/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$person = Person::find($id);
		$person->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the person entry!');
		return Redirect::to('people');
	}

}