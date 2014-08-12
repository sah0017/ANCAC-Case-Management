<?php

class RelativeTypeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$relativeType = RelationType::all();

		// load the view and pass the children
		return View::make('relativeType.index')
			->with('relativeType', $relativeType);
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
		return View::make('relativeType.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $relativeType = new RelationType;
			$relativeType->id                  = Input::get('id');
			$relativeType->type                = Input::get('type');
			$relativeType->save();
			// redirect
			Session::flash('message', 'Successfully stored Woker Type info!');
			return Redirect::to('relativeType');
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
		$relativeType = RelationType::find($id);

		// show the view and pass the nerd to it
		return View::make('relativeType.show')
			->with('RelativeType', $relativeType);
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
		$relativeType = RelationType::find($id);

		// show the view and pass the nerd to it
		return View::make('relativeType.edit')
			->with('relativeType', $relativeType);
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
                        $relativeType = RelationType::find($id);
			$relativeType->id                  = Input::get('id');
			$relativeType->type                = Input::get('type');
			$relativeType->save();
			// redirect
			Session::flash('message', 'Successfully stored Woker Type info!');
			return Redirect::to('relativeType');
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
		$relativeType = RelationType::find($id);
		$relativeType->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the relative Type entry!');
		return Redirect::to('relativeType');
	}

}
