<?php
/* Created by Baggett, Egui, and Murphy - summer 2014 */
/* Controller for School, links school view and BaseController. */
/* Provides index, create, store, show, edit, update, and destroy functions. */
/* stores, deletes, and saves school information.     */

class SchoolController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /school
	 *
	 * @return Response
	 */
	public function index()
	{
		//
            $school = School::where('center_id', Auth::User()->center_id)
                        ->orWhere('center_id', 99)->get();

		// load the view and pass the school
		return View::make('school.index')
			->with('school', $school);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /school/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
            return View::make('school.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /school
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		
					// store
			$school = new School;
			$school->name = Input::get('name');
                        $school->center_id         = Auth::User()->center_id;

			$school->save();

			// redirect
			Session::flash('message', 'Successfully created school!');
			return Redirect::to('school');
		
	}

	/**
	 * Display the specified resource.
	 * GET /school/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
				// get the school
		$school = School::find($id);

		// show the view and pass the school to it
		return View::make('school.show')
			->with('school', $school);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /school/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
            $school = School::find($id);

		// show the edit form and pass the school
		return View::make('school.edit')
			->with('school', $school);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /school/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$school = School::find($id);
			$school->name = Input::get('name');

			$school->save();

			// redirect
			Session::flash('message', 'Successfully created school!');
			return Redirect::to('school');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /school/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$school = School::find($id);
		$school->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the School entry!');
		return Redirect::to('school');
	}

}
