<?php

class AbusedChildController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /children
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the children
		$children = AbusedChild::all();

		// load the view and pass the children
		return View::make('children.index')
			->with('children', $children);
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
		return View::make('children.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /children
	 *
	 * @return Response
	 */
	public function store()
	{
                        $child = new AbusedChild;
			$child->person_id        = Input::get('person_id');
			$child->parentalHistory  = Input::get('parentalHistory');
			$child->parentStatus     = Input::get('parentStatus');
                        $child->medicalCompleted = Input::get('medicalCompleted');
                        $child->schoolGrade      = Input::get('schoolGrade');
                        $child->school           = Input::get('school');
			$child->save();

			// redirect
			Session::flash('message', 'Successfully stored child info!');
			return Redirect::to('children');
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
		$child = AbusedChild::find($id);

		// show the view and pass the nerd to it
		return View::make('children.show')
			->with('child', $child);
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
		$child = AbusedChild::find($id);

		// show the view and pass the nerd to it
		return View::make('children.edit')
			->with('child', $child);
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
                        $child = AbusedChild::find($id);
			$child->person_id        = Input::get('person_id');
			$child->parentalHistory  = Input::get('parentalHistory');
			$child->parentStatus     = Input::get('parentStatus');
                        $child->medicalCompleted = Input::get('medicalCompleted');
                        $child->schoolGrade      = Input::get('schoolGrade');
                        $child->school           = Input::get('school');
			$child->save();

			// redirect
			Session::flash('message', 'Successfully updated child info!');
			return Redirect::to('children');
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
		$child = AbusedChild::find($id);
		$child->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the child entry!');
		return Redirect::to('children');
	}

}