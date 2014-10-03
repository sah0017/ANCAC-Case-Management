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
		$session = CaseSession::where('center_id', Auth::User()->center_id)->get();

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
               Session::put('from','session');
		return View::make('session.create')->with(array('child_id'=>0,'case_id'=>0));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessioncontrller
	 *
	 * @return Response
	 */
	public function store()
	{
		$session = new CaseSession;
                $session->serviceType_id     =Input::get('serviceType_id');
		$session->date               =Input::get('date');
                $session->timeStart         =Input::get('timeStart');
                $session->timeEnd            =Input::get('timeEnd');
                $session->status             =Input::get('status');
		$session->worker_id          =Input::get('worker_id');
                $session->discussedAbuse     =Input::get('discussedAbuse');
                $session->center_id         = Auth::User()->center_id;
		$session->save();
                
                $child_id = Input::get('child_id');
                if($child_id > 0){
                DB::table('abusedchild_session')->insert(array('abusedChild_id' => $child_id, 'session_id' => $session->id,
                    'case_id'=>Input::get('case_id')));
                }
		// redirect
		Session::flash('message', 'Successfully created session!');
		return Redirect::to(Session::get('from'));
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
		$session = CaseSession::find($id);

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
		$session = CaseSession::find($id);

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
		$session = CaseSession::find($id);
                $session->serviceType_id     =Input::get('serviceType_id');
		$session->date               =Input::get('date');
                $session->timeStart         =Input::get('timeStart');
                $session->timeEnd            =Input::get('timeEnd');
                $session->status             =Input::get('status');
		$session->worker_id          =Input::get('worker_id');
                $session->discussedAbuse     =Input::get('discussedAbuse');
		$session->save();

		// redirect
		Session::flash('message', 'Successfully updated session info!');
		return Redirect::to(Session::get('from'));
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
		$session = CaseSession::find($id);
		$session->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the session entry!');
		return Redirect::back();
	}

}
