<?php
/* Created by Baggett, Egui, and Murphy - summer 2014 */
/* Controller for Session Note, links sessionNotes view and BaseController. */
/* Provides index, create, store, show, edit, update, and destroy functions. */
/* stores, deletes, and saves session notes information.     */

class SessionNotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /Session Notes
	 *
	 * @return Response
	 */
	public function index()
	{
               
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessionNotes/create
	 *
	 * @return Response
	 */
	public function create()
	{
                // load the create form (app/views/sessionNotes/create.blade.php)
		return View::make('sessionNotes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /Session Notes
	 *
	 * @return Response
	 */
	public function store()
	{
                        $sessionNotes = new SessionNote;
			$sessionNotes->id                  = Input::get('id');
			$sessionNotes->note                = Input::get('note');
                        $sessionNotes->worker_id           = Input::get('worker_id');
                        $sessionNotes->session_id           = Input::get('session_id');
			$sessionNotes->save();
			// redirect
			Session::flash('message', 'Successfully stored Session Notes info!');
			return Redirect::to(Session::pull('from'));
	}

	/**
	 * Display the specified resource.
	 * GET /sessionNotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
                // get the sessionNotes
		$sessionNotes = SessionNote::find($id);

		// show the view and pass the nerd to it
		return View::make('sessionNotes.show')
			->with('SessionNotes', $sessionNotes);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sessionNotes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                // get the sessionNotes
		$sessionNotes = SessionNote::find($id);

		// show the view and pass the nerd to it
		return View::make('sessionNotes.edit')
			->with('sessionNotes', $sessionNotes);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sessionNotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
                        $sessionNotes = SessionNote::find($id);
			//$sessionNotes->id                  = Input::get('id');
			$sessionNotes->note                = Input::get('note');
                        $sessionNotes->worker_id           = Input::get('worker_id');
                        //$sessionNotes->session_id           = Input::get('session_id');
			$sessionNotes->save();
			// redirect
			Session::flash('message', 'Successfully stored session note info!');
			return Redirect::to(Session::get('from'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessionNotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$sessionNotes = SessionNote::find($id);
		$sessionNotes->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the session note entry!');
		return Redirect::back();
	}

}
