<?php

class AbusedChildController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$children = AbusedChild::where('center_id', Auth::User()->center_id)->get();

		// load the view and pass the children
		return View::make('children.index')
			->with('children', $children);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /children/create
	 *
	 * @return Response
	 */
	public function create()
	{
                // load the create form (app/views/children/create.blade.php)
		return View::make('children.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
        {
                        $household = new Household;
                        $household->save();
                        
                        $person = new Person;
			$person->first = Input::get('first');
                        $person->middle = Input::get('middle');
                        $person->last = Input::get('last');
                        $person->age = Input::get('age');
                        $person->dob = Input::get('dob');
                        $person->gender= Input::get('gender');
                        $person->originCountry = Input::get('originCountry');
                        $person->specialNeeds = Input::get('specialNeeds',"");
                        $person->language = Input::get('language');
                        $person->household_id = $household->id;
                        $person->ethnicity_id = Input::get('ethnicity_id');
                        $person->center_id         = Auth::User()->_id;
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
                            $person->address_id = Input::get('address_id',0);
                        } else {
                            $person->address_id = 0;
                        }
                        $person->save();
            
                        $child = new AbusedChild;
			$child->person_id        = $person->id;
			$child->parentalHistory  = Input::get('parentalHistory');
			$child->parentStatus     = Input::get('parentStatus');
                        $child->medicalCompleted = Input::get('medicalCompleted', false);
                        $child->schoolGrade      = Input::get('schoolGrade');
                        $child->school           = Input::get('school');
                        $child->center_id         = Auth::User()->center;
			$child->save();

			// redirect
			Session::flash('message', 'Successfully stored child info!');
			return Redirect::to(Session::get('from'));
	}

	/**
	 * Display the specified resource.
	 * GET /children/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
                // get the child
		$child = AbusedChild::find($id);

		// show the view and pass the nerd to it
		return View::make('children.show')
			->with('child', $child);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /children/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                // get the child
		$child = AbusedChild::find($id);

		// show the view and pass the nerd to it
		return View::make('children.edit')
			->with('child', $child);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /children/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
                        $child = AbusedChild::find($id);
                        $person = $child->personalInfo;
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
                        $person->specialNeeds = Input::get('specialNeeds');
                        $person->language = Input::get('language');
                        $person->maritalStatus = Input::get('maritalStatus','single');
                        $person->household_id = Input::get('household_id');
                        $person->ethnicity_id = Input::get('ethnicity_id');
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
                        
                        
			$child->person_id        = $person->id;
			$child->parentalHistory  = Input::get('parentalHistory');
			$child->parentStatus     = Input::get('parentStatus');
                        $child->medicalCompleted = Input::get('medicalCompleted');
                        $child->schoolGrade      = Input::get('schoolGrade');
                        $child->school           = Input::get('school');
			$child->save();

			// redirect
			Session::flash('message', 'Successfully updated child info!');
			return Redirect::to(Session::pull('from'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /children/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$child = AbusedChild::find($id);
                $child->personalInfo->delete();
		$child->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the child entry!');
		return Redirect::to('children');
	}

}