/* Created by Baggett, Egui, and Murphy - summer 2014 */
/* Controller for Service Type, links servinceType view and BaseController. */
/* Provides index, create, store, show, edit, update, and destroy functions. */
/* stores, deletes, and saves service information.     */
<?php

class ServiceTypeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /serviceType
	 *
	 * @return Response
	 */
	public function index()
	{
		//
            $serviceType = ServiceType::where('center_id', Auth::User()->center_id)
                        ->orWhere('center_id', 99)->get();

		// load the view and pass the serviceType
		return View::make('serviceType.index')
			->with('serviceType', $serviceType);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /serviceType/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
            return View::make('serviceType.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /serviceType
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		
					// store
			$serviceType = new ServiceType;
			$serviceType->type = Input::get('type');
                        $serviceType->center_id         = Auth::User()->center_id;

			$serviceType->save();

			// redirect
			Session::flash('message', 'Successfully created serviceType!');
			return Redirect::to('serviceType');
		
	}

	/**
	 * Display the specified resource.
	 * GET /serviceType/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
				// get the serviceType
		$serviceType = ServiceType::find($id);

		// show the view and pass the serviceType to it
		return View::make('serviceType.show')
			->with('serviceType', $serviceType);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /serviceType/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
            $serviceType = ServiceType::find($id);

		// show the edit form and pass the serviceType
		return View::make('serviceType.edit')
			->with('serviceType', $serviceType);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /serviceType/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$serviceType = ServiceType::find($id);
			$serviceType->type = Input::get('type');

			$serviceType->save();

			// redirect
			Session::flash('message', 'Successfully created serviceType!');
			return Redirect::to('serviceType');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /serviceType/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$serviceType = ServiceType::find($id);
		$serviceType->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the service Type entry!');
		return Redirect::to('serviceType');
	}

}
