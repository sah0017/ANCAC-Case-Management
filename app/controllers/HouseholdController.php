<?php
/* Created by Baggett, Egui, Murphey summer 2014 */
/* contains CRUD functions for household */

class HouseholdController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /household
	 *
	 * @return Response
	 */
	public function index()
	{
		//
            $households = Household::all();

		// load the view and pass the household
		return View::make('households.index')
			->with('households', $households);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /household/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
            return View::make('households.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /household
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		
                // store
                $household = new Household;
                $household->pets = Input::get('pets');
                $household->medicare = Input::get('medicare',false);
                $household->allKids = Input::get('allKids',false);
                $household->freeOrReducedLunch = Input::get('freeOrReducedLunch',false);
                $household->onBase = Input::get('onBase',false);
                $household->save();

                // redirect
                Session::flash('message', 'Successfully created household!');
                return Redirect::to('households');
		
	}

	/**
	 * Display the specified resource.
	 * GET /household/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
				// get the household
		$household = Household::find($id);

		// show the view and pass the household to it
		return View::make('households.show')
			->with('household', $household);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /household/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
            $household = Household::find($id);

		// show the edit form and pass the household
		return View::make('households.edit')
			->with('household', $household);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /household/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$household = Household::find($id);
                $household->pets = Input::get('pets','unknown');
                $household->medicare = Input::get('medicare',false);
                $household->allKids = Input::get('allKids',false);
                $household->freeOrReducedLunch = Input::get('freeOrReducedLunch',false);
                $household->onBase = Input::get('onBase',false);
                $household->save();
                
                // redirect
			Session::flash('message', 'Successfully updated household info!');
			return Redirect::to(Session::get('from'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /household/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$household = Household::find($id);
		$household->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the household entry!');
		return Redirect::to('households');
	}

}