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
		$people = Person::where('center_id', Auth::User()->center_id)->get();

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
			$person->first = Input::get('first');
                        $person->middle = Input::get('middle');
                        $person->last = Input::get('last');
                        $person->age = Input::get('age');
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
                        $person->specialNeeds = Input::get('specialNeeds',"");
                        $person->language = Input::get('language');
                        $person->maritalStatus = Input::get('maritalStatus');
                        $person->household_id = Input::get('household_id');
                        $person->ethnicity_id = Input::get('ethnicity_id');
                        $person->center_id         = Auth::User()->center_id;
                        
                        $cellPhone = new Phone;
                        $cellPhone->number            = Input::get('cellPhone');
                        $cellPhone->type='cell';
                        $cellPhone->save();
                        
                        $workPhone = new Phone;
                        $workPhone->number              = Input::get('workPhone');
                        $workPhone->type='work';
                        $workPhone->save();
			
                        $address = new Address;
                        $address->line1               = Input::get('address1');
                        $address->line2               = Input::get('address2');
                        $address->city                = Input::get('city');
                        $address->state               = Input::get('state');
                        $address->zip                 = Input::get('zip');
                        $address->county_id           = Input::get('county_id');
			$address->save();
                        
                        $person->address_id           = $address->id;
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
			$person->first = Input::get('first');
                        $person->middle = Input::get('middle');
                        $person->last = Input::get('last');
                        $person->age = Input::get('age');                        $person->dob = Input::get('dob');
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
                        $person->specialNeeds = Input::get('specialNeeds',"");
                        $person->language = Input::get('language');
                        $person->maritalStatus = Input::get('maritalStatus');
                        $person->household_id = Input::get('househole_id');
                        $person->ethnicity_id = Input::get('ethnicity_id');
                        $person->cellPhone = Input::get('cellPhone');
			$person->workPhone = Input::get('workPhone');
                        $address = Address::find($person->address_id);
                        $address->line1               = Input::get('address1');
                        $address->line2               = Input::get('address2');
                        $address->city                = Input::get('city');
                        $address->state               = Input::get('state');
                        $address->zip                 = Input::get('zip');
                        $address->county_id           = Input::get('county_id');
			$address->save();
                        $person->save();

			// redirect
			Session::flash('message', 'Successfully updated person info!');
			return Redirect::to(Session::get('from'));
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
        
        public function search() {
            $people = Response::json(Person::where('last', 'LIKE', '%'.Input::get('last').'%')
                    ->where('center_id', Auth::User()->center_id)->get());
            
            return $people;
            //return Person::all();
        }

}