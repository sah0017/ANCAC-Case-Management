<?php

class relativeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$relative = Relationship::all();

		// load the view and pass the children
		return View::make('relatives.index')
			->with('relatives', $relative);
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
		return View::make('relatives.create')->with('id',0);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $relative = new Relationship;
			$relative->abusedChild_id    = Input::get('abusedChild_id');
                        if (intval(Input::get('person_id')) == 0){
                            $person = new Person;
                            $person->first = Input::get('first');
                            $person->middle = Input::get('middle');
                            $person->last = Input::get('last');
                            $person->dob = Input::get('dob');
                            $person->save();
                            $relative->person_id = $person->id;
                        }else {
                            $relative->person_id = Input::get('person_id');
                        }
			$relative->relationType_id   = Input::get('relationType_id');
			$relative->custodian         = Input::get('custodian',false);
                        $relative->sameHouse         = Input::get('sameHouse',false);
                        $relative->alias             = Input::get('alias');
			$relative->save();
                        
                        if (Input::get('allegedOffender', false)){
                            $allegedOffender = new AllegedOffender;
                            $allegedOffender->person_id = $relative->person_id;
                            $allegedOffender->case_id = Input::get('case_id');
                            $allegedOffender->county_id = Input::get('county_id');
                            $allegedOffender->save();
                        }

			// redirect
			Session::flash('message', 'Successfully stored Relationship info!');
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
		$relative = Relationship::find($id);

		// show the view and pass the nerd to it
		return View::make('relatives.show')
			->with('relative', $relative);
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
		$relative = Relationship::find($id);

		// show the view and pass the nerd to it
		return View::make('relatives.edit')
			->with('relative', $relative);
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
                        $relative = Relationship::find($id);
			//$relative->abusedChild_id    = Input::get('abusedChild_id');
                        //$relative->person_id         = Input::get('person_id');
			$relative->relationType_id   = Input::get('relationType_id');
			$relative->custodian         = Input::get('custodian');
                        $relative->sameHouse         = Input::get('sameHouse');
                        $relative->alias             = Input::get('alias');
			$relative->save();

			// redirect
			Session::flash('message', 'Successfully updated Relationship info!');
			return Redirect::to('relatives');
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
		$relative = Relationship::find($id);
		$relative->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Relationship entry!');
		return Redirect::back();
	}
        


}

