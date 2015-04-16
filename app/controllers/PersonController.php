<?php
/* Created by Baggett, Egui, and Murphy - summer 2014 */
/* Controller for Person, links people view and BaseController. */
/* Provides index, create, store, show, edit, update, destroy, and search functions. */
/* stores, deletes, and saves person information.     */

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
                        $person->cellPhone  =Input::get('cellPhone');
                        $person->workPhone = input::get('workPhone');
                        $person->gender = input::get('gender');
                        
                        if( Input::get('address_id') == 0 && Input::get('address1') != 'unknown'){
                            $address = new Address;
                            $address->line1               = Input::get('address1');
                            $address->line2               = Input::get('address2');
                            $address->city                = Input::get('city');
                            $address->state               = Input::get('state');
                            $address->zip                 = Input::get('zip');
                            $address->county_id           = Input::get('county_id');
                            $address->save();
                            $person->address_id           = $address->id;
                        } elseif( Input::get('address_id') != 0 ){
                            $person->address_id = Input::get('address_id');
                        } else {
                            $person->address_id = 0;
                        }
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
                        $person->gender = input::get('gender');
                        if( Input::get('address_id') == 1 && Input::get('address1') != 'unknown'){
                            $address = new Address;
                            $address->line1               = Input::get('address1');
                            $address->line2               = Input::get('address2');
                            $address->city                = Input::get('city');
                            $address->state               = Input::get('state');
                            $address->zip                 = Input::get('zip');
                            $address->county_id           = Input::get('county_id');
                            $address->save();
                            $person->address_id           = $address->id;
                        } elseif( Input::get('address_id') != 1 ){
                            $person->address_id = Input::get('address_id',1);
                        } else {
                            $person->address_id = 1;
                        }
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
            $people = null;
            if (strlen(Input::get('last')) >2){
                $people = Person::where('last', 'LIKE', '%'.Input::get('last').'%')
                        ->where('center_id', Auth::User()->center_id)->get();
            }
            if (strlen(Input::get('first')) >2){
                $people = $people->filter(function($person)
                    {
                        if($person->first == Input::get('first'))
                        {return true;}
                        else
                        {return false;}
                    });
            }
            if (strlen(Input::get('middle')) >2){
                $people = $people->filter(function($person)
                    {
                        if($person->middle == Input::get('middle'))
                        {return true;}
                        else
                        {return false;}
                    });
            }
            return Response::json($people);
            //return Person::all();
        }
        public function searchOutside() {
            $people = null;
            $result = new Illuminate\Database\Eloquent\Collection;
            if (strlen(Input::get('last')) >2){
                $people = Person::where('last', 'LIKE', '%'.Input::get('last').'%')
                        ->where('center_id', Auth::User()->center_id)->get();
            }
            if (strlen(Input::get('first')) >2){
                $people = $people->filter(function($person)
                    {
                        if($person->first == Input::get('first'))
                        {return true;}
                        else
                        {return false;}
                    });
            }
            if (strlen(Input::get('middle')) >2){
                $people = $people->filter(function($person)
                    {
                        if($person->middle == Input::get('middle'))
                        {return true;}
                        else
                        {return false;}
                    });
            }
            if($people->count() > 0){
                foreach ($people as $key => $person) {
                    $result->put(1,Center::where('center',$person->center_id)->pluck('CenterName'));
                }
            }
            
            return Response::json($result);
            //return Person::all();
        }

}
