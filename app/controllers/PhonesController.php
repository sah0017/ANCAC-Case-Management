<?php

class PhonesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$phones = Phone::all();

		// load the view and pass the children
		return View::make('phones.index')
			->with('phones', $phones);
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
		return View::make('phones.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $phones = new Phone;
			$phones->number                  = Input::get('number');
			$phones->type                = Input::get('type');
			$phones->save();
			// redirect
			Session::flash('message', 'Successfully stored Woker Type info!');
			return Redirect::to('phones');
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
		$phones = Phone::find($id);

		// show the view and pass the nerd to it
		return View::make('phones.show')
			->with('Phones', $phones);
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
		$phones = Phone::find($id);

		// show the view and pass the nerd to it
		return View::make('phones.edit')
			->with('phones', $phones);
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
                        $phones = Phone::find($id);
			$phones->number                 = Input::get('number');
			$phones->type                = Input::get('type');
			$phones->save();
			// redirect
			Session::flash('message', 'Successfully stored Woker Type info!');
			return Redirect::to('phones');
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
		$phones = Phone::find($id);
		$phones->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the worker Type entry!');
		return Redirect::to('phones');
	}

}