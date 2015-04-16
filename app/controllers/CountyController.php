<?php
/* created by Baggett, Egui, and Murphy summer 2014 */
/* contains CRUD functions for County */

class CountyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$county = County::all();

		// load the view and pass the children
		return View::make('county.index')
			->with('county', $county);
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
		return View::make('county.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $county = new County;
			$county->id                  = Input::get('id');
			$county->name                = Input::get('name');
			$county->save();
			// redirect
			Session::flash('message', 'Successfully stored County info!');
			return Redirect::to('county');
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
		$county = County::find($id);

		// show the view and pass the nerd to it
		return View::make('county.show')
			->with('County', $county);
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
		$county = County::find($id);

		// show the view and pass the nerd to it
		return View::make('county.edit')
			->with('county', $county);
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
                        $county = County::find($id);
			$county->id                  = Input::get('id');
			$county->name                = Input::get('name');
			$county->save();
			// redirect
			Session::flash('message', 'Successfully stored County info!');
			return Redirect::to('county');
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
		$county = County::find($id);
		$county->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the County entry!');
		return Redirect::to('county');
	}

}