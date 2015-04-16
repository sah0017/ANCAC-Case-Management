<?php
/* Created by Baggett, Egui, and Murphy - summer 2014 */
/* Controller for User, links User model and users view */
/* Provides index, create, store, show, edit, update and destroy functions. */
/* store saves User and Worker information */

class UserController extends \BaseController {
    
        function __construct() {
                $this->beforeFilter('level:3', array('except' => array('index', 'show')));
        }

    /**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
                // get all the users
                if (Auth::User()->center_id == 99){
                    $users = User::all();
                }else{
                    $users = User::where('center_id', Auth::User()->center_id)->get();
                }

		// load the view and pass the users
		return View::make('users.index')
			->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
                // load the create form (app/views/users/create.blade.php)
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
                        $user = new User;
                        $user->id = Input::get('id');
                        $user->fullname = Input::get('fullname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->center_id = Input::get('center_id');
			$user->level = Input::get('level');
			
                        $worker = new Worker;
                        $worker->name = $user->fullname;
                        $worker->workerType_id = Input::get('workerType_id',1);
                        $worker->center_id = $user->center_id;
                        $worker->save();
                        
                        $user->worker_id = $worker->id;
			$user->save();

                        // redirect
			Session::flash('message', 'Successfully stored User info!');
			return Redirect::to('users');
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
                // get the child
		$user = User::find($id);

		// show the view and pass the nerd to it
		return View::make('users.show')
			->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                // get the child
		$user = User::find($id);

		// show the view and pass the nerd to it
		return View::make('users.edit')
			->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
                        $user = User::find($id);
                        $user->id = Input::get('id');
                        $user->fullname = Input::get('fullname');
			$user->email = Input::get('email');
			//$user->password = Hash::make(Input::get('password'));
			$user->center_id = Input::get('center_id');
			$user->level = Input::get('level');
			$user->save();
                        
                        $worker = Worker::find($user->worker_id);
                        $worker->name = $user->fullname;
                        $worker->workerType_id = Input::get('workerType_id',1);
                        $worker->save();

			// redirect
			Session::flash('message', 'Successfully updated User info!');
			return Redirect::to('users');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            
		// delete
		$user = User::find($id);
		$user->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the user entry!');
		return Redirect::to('users');
	}

}