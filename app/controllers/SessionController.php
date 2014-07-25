<?php

class SessionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sessioncontroller
	 *
	 * @return Response
	 */
	public function index()
	{
		$session = Session::all();

		// load the view and pass the sessioncontroller
		return View::make('session.index')
			->with('session', $session);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessioncontrller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('session.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessioncontrller
	 *
	 * @return Response
	 */
	public function store()
	{
		$session = new Session;
                $session->id                 =Input::get('id');
                $session->serviceType_id     =Input::get('serviceType_id');
		$session->dateAndTime        =Input::get('dateAndTime');
		$session->worker_id          =Input::get('worker_id');
		$session->save();

		// redirect
		Session::flash('message', 'Successfully created session!');
		return Redirect::to('session');
	}

	/**
	 * Display the specified resource.
	 * GET /sessioncontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
						// get the case
		$session = Session::find($id);

		// show the view and pass the abuseType to it
		return View::make('session.show', array('session'=>$session));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sessioncontrller/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$session = Session::find($id);

		// show the edit form and pass the sessioncontroller
		return View::make('session.edit')
			->with('session', $session);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sessioncontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$session = Session::find($id);
                $session->id                 =Input::get('id');
                $session->serviceType_id     =Input::get('serviceType_id');
		$session->dateAndTime        =Input::get('dateAndTime');
		$session->worker_id          =Input::get('worker_id');
		$session->save();

		// redirect
		Session::flash('message', 'Successfully updated session info!');
		return Redirect::to('session');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessioncontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$session = Session::find($id);
		$session->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the session entry!');
		return Redirect::to('session');
	}

}