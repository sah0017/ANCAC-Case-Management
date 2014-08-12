<?php

class EthnicityController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$ethnicity = Ethnicity::all();

		// load the view and pass the children
		return View::make('ethnicity.index')
			->with('ethnicity', $ethnicity);
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
		return View::make('ethnicity.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $ethnicity = new Ethnicity;
			$ethnicity->id                  = Input::get('id');
			$ethnicity->ethnicity                = Input::get('ethnicity');
			$ethnicity->save();
			// redirect
			Session::flash('message', 'Successfully stored Ethnicity info!');
			return Redirect::to('ethnicity');
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
		$ethnicity = Ethnicity::find($id);

		// show the view and pass the nerd to it
		return View::make('ethnicity.show')
			->with('Ethnicity', $ethnicity);
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
		$ethnicity = Ethnicity::find($id);

		// show the view and pass the nerd to it
		return View::make('ethnicity.edit')
			->with('ethnicity', $ethnicity);
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
                        $ethnicity = Ethnicity::find($id);
			$ethnicity->id                  = Input::get('id');
			$ethnicity->ethnicity                = Input::get('ethnicity');
			$ethnicity->save();
			// redirect
			Session::flash('message', 'Successfully stored Ethnicity info!');
			return Redirect::to('ethnicity');
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
		$ethnicity = Ethnicity::find($id);
		$ethnicity->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Ethnicity entry!');
		return Redirect::to('ethnicity');
	}

}

