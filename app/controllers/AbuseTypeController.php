<?php

class AbuseTypeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /abusetype
	 *
	 * @return Response
	 */
	public function index()
	{
		//
            $abuseTypes = AbuseType::all();

		// load the view and pass the abuseTypes
		return View::make('abuseTypes.index')
			->with('abuseTypes', $abuseTypes);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /abusetype/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
            return View::make('abuseTypes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /abusetype
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		
					// store
			$abuseType = new AbuseType;
			$abuseType->type = Input::get('type');

			$abuseType->save();

			// redirect
			Session::flash('message', 'Successfully created abuseType!');
			return Redirect::to('abuseTypes');
		
	}

	/**
	 * Display the specified resource.
	 * GET /abusetype/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
				// get the abuseType
		$abuseType = AbuseType::find($id);

		// show the view and pass the abuseType to it
		return View::make('abuseTypes.show')
			->with('abuseType', $abuseType);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /abusetype/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
            $abuseType = AbuseType::find($id);

		// show the edit form and pass the abuseType
		return View::make('abuseTypes.edit')
			->with('abuseType', $abuseType);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /abusetype/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$abuseType = AbuseType::find($id);
			$abuseType->type = Input::get('type');

			$abuseType->save();

			// redirect
			Session::flash('message', 'Successfully created abuseType!');
			return Redirect::to('abuseTypes');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /abusetype/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}