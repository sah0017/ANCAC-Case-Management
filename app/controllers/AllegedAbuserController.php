<?php

class AllegedAbuserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /allegedAbusers
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the allegedAbusers
		$allegedAbusers = AllegedAbuser::all();

		// load the view and pass the allegedAbusers
		return View::make('allegedAbusers.index')
			->with('allegedAbusers', $allegedAbusers);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /allegedAbusers/create
	 *
	 * @return Response
	 */
	public function create()
	{
                // load the create form (app/views/allegedAbusers/create.blade.php)
		return View::make('allegedAbusers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /allegedAbusers
	 *
	 * @return Response
	 */
	public function store()
	{
                        $allegedAbuser = new AllegedAbuser;
			$allegedAbuser->person_id        = Input::get('person_id');
                        $allegedAbuser->known            = Input::get('known',false);
                        $allegedAbuser->adult            = Input::get('adult',false);
			$allegedAbuser->save();

			// redirect
			Session::flash('message', 'Successfully stored allegedAbuser info!');
			return Redirect::to('allegedAbusers');
	}

	/**
	 * Display the specified resource.
	 * GET /allegedAbusers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
                // get the allegedAbuser
		$allegedAbuser = AllegedAbuser::find($id);

		// show the view and pass the nerd to it
		return View::make('allegedAbusers.show')
			->with('allegedAbuser', $allegedAbuser);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /allegedAbusers/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                // get the allegedAbuser
		$allegedAbuser = AllegedAbuser::find($id);

		// show the view and pass the nerd to it
		return View::make('allegedAbusers.edit')
			->with('allegedAbuser', $allegedAbuser);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /allegedAbusers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
                        $allegedAbuser = AllegedAbuser::find($id);
			$allegedAbuser->person_id        = Input::get('person_id');
                        $allegedAbuser->known            = Input::get('known',false);
                        $allegedAbuser->adult            = Input::get('adult',false);
			$allegedAbuser->save();

			// redirect
			Session::flash('message', 'Successfully updated allegedAbuser info!');
			return Redirect::to('allegedAbusers');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /allegedAbusers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$allegedAbuser = AllegedAbuser::find($id);
		$allegedAbuser->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the allegedAbuser entry!');
		return Redirect::to('allegedAbusers');
	}

}