<?php

class AddressController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$address = Address::all();

		// load the view and pass the children
		return View::make('address.index')
			->with('address', $address);
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
		return View::make('address.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $address = new Address;
			$address->id                  = Input::get('id');
			$address->line1               = Input::get('line1');
                        $address->line2               = Input::get('line2');
                        $address->city                = Input::get('city');
                        $address->state               = Input::get('state');
                        $address->zip                 = Input::get('zip');
                        $address->county_id           = Input::get('county_id');
			$address->save();
			// redirect
			Session::flash('message', 'Successfully stored Address info!');
			return Redirect::to('address');
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
		$address = Address::find($id);

		// show the view and pass the nerd to it
		return View::make('address.show')
			->with('workerTpe', $address);
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
		$address = Address::find($id);

		// show the view and pass the nerd to it
		return View::make('address.edit')
			->with('address', $address);
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
                        $address = Address::find($id);
			$address->id                  = Input::get('id');
			$address->line1               = Input::get('line1');
                        $address->line2               = Input::get('line2');
                        $address->city                = Input::get('city');
                        $address->state               = Input::get('state');
                        $address->zip                 = Input::get('zip');
                        $address->county_id           = Input::get('county_id');
			$address->save();
			// redirect
			Session::flash('message', 'Successfully stored Address info!');
			return Redirect::to('address');
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
		$address = Address::find($id);
		$address->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Address entry!');
		return Redirect::to('address');
	}

}