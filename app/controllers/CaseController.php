<?php

class CaseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /casecontrller
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /casecontrller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /casecontrller
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /casecontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
						// get the case
		$case = TrackedCase::find($id);
		$kid = AbusedChild::find($case->abusedChild_id);
		//$kidInfo = Person::find($kid->person_id);

		// show the view and pass the abuseType to it
		return View::make('cases.show', array('case'=>$case,'kid'=>$kid));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /casecontrller/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /casecontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /casecontrller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}