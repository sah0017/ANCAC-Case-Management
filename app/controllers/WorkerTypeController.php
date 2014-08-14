<?php

class WorkerTypeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$workerType = WorkerType::where('center_id', Auth::User()->center_id)
                        ->orWhere('center_id', 99)->get();
		// load the view and pass the children
		return View::make('workerType.index')
			->with('workerType', $workerType);
                
                
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
		return View::make('workerType.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $workerType = new WorkerType;
			$workerType->id                  = Input::get('id');
			$workerType->type                = Input::get('type');
                        $workerType->center_id         = Auth::User()->center_id;
			$workerType->save();
			// redirect
			Session::flash('message', 'Successfully stored Woker Type info!');
			return Redirect::to('workerType');
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
		$workerType = WorkerType::find($id);

		// show the view and pass the nerd to it
		return View::make('workerType.show')
			->with('WorkerType', $workerType);
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
		$workerType = WorkerType::find($id);

		// show the view and pass the nerd to it
		return View::make('workerType.edit')
			->with('workerType', $workerType);
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
                        $workerType = WorkerType::find($id);
			$workerType->id                  = Input::get('id');
			$workerType->type                = Input::get('type');
			$workerType->save();
			// redirect
			Session::flash('message', 'Successfully stored Woker Type info!');
			return Redirect::to('workerType');
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
		$workerType = WorkerType::find($id);
		$workerType->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the worker Type entry!');
		return Redirect::to('workerType');
	}

}