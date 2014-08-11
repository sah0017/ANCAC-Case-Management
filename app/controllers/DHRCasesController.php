<?php

class DHRCasesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$dHRCases = DHRCase::all();

		// load the view and pass the children
		return View::make('DHRCases.index')
			->with('DHRCases', $dHRCases);
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
		return View::make('DHRCases.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $dHRCases = new DHRCase;
			$dHRCases->id                  = Input::get('id');
			$dHRCases->household_id        = Input::get('household_id');
                        $dHRCases->caseNumber          = Input::get('caseNumber');
                        $dHRCases->status              = Input::get('status');
                        $dHRCases->type                = Input::get('type');
                        $dHRCases->opened              = Input::get('opened');
                        $dHRCases->closed              = Input::get('closed');
			$dHRCases->save();
			// redirect
			Session::flash('message', 'Successfully stored DHR Cases info!');
			return Redirect::to('DHRCases');
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
		$dHRCases = DHRCase::find($id);

		// show the view and pass the nerd to it
		return View::make('DHRCases.show')
			->with('workerTpe', $dHRCases);
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
		$dHRCases = DHRCase::find($id);

		// show the view and pass the nerd to it
		return View::make('DHRCases.edit')
			->with('dHRCases', $dHRCases);
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
                        $dHRCases = DHRCase::find($id);
			$dHRCases->id                  = Input::get('id');
			$dHRCases->household_id        = Input::get('household_id');
                        $dHRCases->caseNumber          = Input::get('caseNumber');
                        $dHRCases->status              = Input::get('status');
                        $dHRCases->type                = Input::get('type');
                        $dHRCases->opened              = Input::get('opened');
                        $dHRCases->closed              = Input::get('closed');
			$dHRCases->save();
			// redirect
			Session::flash('message', 'Successfully stored DHR Cases info!');
			return Redirect::to('DHRCases');
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
		$dHRCases = DHRCase::find($id);
		$dHRCases->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the DHR Cases entry!');
		return Redirect::to('DHRCases');
	}

}