<?php

class WorkersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		//$worker = Worker::all();
                
                $workers = Worker::where('center_id', Auth::User()->center_id)->get();
                

		// load the view and pass the children
		return View::make('workers.index')
			->with('workers', $workers);
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
		return View::make('workers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $worker = new Worker;
			$worker->name                = Input::get('name');
                        $worker->workerType_id       = input::get('workerType_id');
                        $worker->center_id         = Auth::User()->center_id;
			$worker->save();
			// redirect
			Session::flash('message', 'Successfully stored Woker info!');
			return Redirect::to('workers');
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
		$worker = Worker::find($id);

		// show the view and pass the nerd to it
		return View::make('workers.show')
			->with('worker', $worker);
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
		$worker = Worker::find($id);

		// show the view and pass the nerd to it
		return View::make('workers.edit')
			->with('worker', $worker);
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
                        $worker = Worker::find($id);
			$worker->name                = Input::get('name');
                        $worker->workerType_id       = input::get('workerType_id');
			$worker->save();

			// redirect
			Session::flash('message', 'Successfully updated Worker info!');
			return Redirect::to('workers');
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
		$worker = Worker::find($id);
		$worker->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the worker entry!');
		return Redirect::to('workers');
	}

}
