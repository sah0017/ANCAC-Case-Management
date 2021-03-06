<?php
/* created by Bagget, Egui, Murphey in summer 2014 */
/* contains CRUD functions for Country Origin */
/* as well as index() show() and store() functions */

class CountryOriginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$countryOrigin = CountryOrigin::all();
		// load the view and pass the children
		return View::make('countryOrigin.index')
			->with('countryOrigin', $countryOrigin);
                
                
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
		return View::make('countryOrigin.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $countryOrigin = new CountryOrigin;
			$countryOrigin->id                  = Input::get('id');
			$countryOrigin->name                = Input::get('name');
			$countryOrigin->save();
			// redirect
			Session::flash('message', 'Successfully stored Country of Origin info!');
			return Redirect::to('countryOrigin');
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
		$countryOrigin = CountryOrigin::find($id);

		// show the view and pass the nerd to it
		return View::make('countryOrigin.show')
			->with('CountryOrigin', $countryOrigin);
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
		$countryOrigin = CountryOrigin::find($id);

		// show the view and pass the nerd to it
		return View::make('countryOrigin.edit')
			->with('countryOrigin', $countryOrigin);
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
                        $countryOrigin = CountryOrigin::find($id);
			$countryOrigin->id                  = Input::get('id');
			$countryOrigin->name                = Input::get('name');
			$countryOrigin->save();
			// redirect
			Session::flash('message', 'Successfully stored Country of Origin info!');
			return Redirect::to('countryOrigin');
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
		$countryOrigin = CountryOrigin::find($id);
		$countryOrigin->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the worker Type entry!');
		return Redirect::to('countryOrigin');
	}

}