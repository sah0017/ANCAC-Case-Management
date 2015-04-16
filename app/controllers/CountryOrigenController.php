<?php
/* created by Bagget, Egui, Murphey in summer 2014 */
/* contains CRUD functions for Country Origen */
/* as well as index() show() and store() functions */

class CountryOrigenController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$countryOrigen = CountryOrigen::all();
		// load the view and pass the children
		return View::make('countryOrigen.index')
			->with('countryOrigen', $countryOrigen);
                
                
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
		return View::make('countryOrigen.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $countryOrigen = new CountryOrigen;
			$countryOrigen->id                  = Input::get('id');
			$countryOrigen->name                = Input::get('name');
			$countryOrigen->save();
			// redirect
			Session::flash('message', 'Successfully stored Country of Origen info!');
			return Redirect::to('countryOrigen');
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
		$countryOrigen = CountryOrigen::find($id);

		// show the view and pass the nerd to it
		return View::make('countryOrigen.show')
			->with('CountryOrigen', $countryOrigen);
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
		$countryOrigen = CountryOrigen::find($id);

		// show the view and pass the nerd to it
		return View::make('countryOrigen.edit')
			->with('countryOrigen', $countryOrigen);
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
                        $countryOrigen = CountryOrigen::find($id);
			$countryOrigen->id                  = Input::get('id');
			$countryOrigen->name                = Input::get('name');
			$countryOrigen->save();
			// redirect
			Session::flash('message', 'Successfully stored Country of Origen info!');
			return Redirect::to('countryOrigen');
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
		$countryOrigen = CountryOrigen::find($id);
		$countryOrigen->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the worker Type entry!');
		return Redirect::to('countryOrigen');
	}

}