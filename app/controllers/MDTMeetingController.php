/* created by Baggett, Egui, Murphey  summer 2014*/
/* contains CRUD functions for MDT Meeting */


<?php

class MDTMeetingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /mdtmeeting
	 *
	 * @return Response
	 */
	public function index()
	{
                $MDTReport = MDTMeeting::where('center_id', Auth::User()->center_id)->get();

		// load the view and pass the casecntroller
		return View::make('MDTReport.index')
			->with('MDTReport', $MDTReport);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /mdtmeeting/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$cases = TrackedCase::all();
                return View::make('MDTReport.create')->with('cases',$cases);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /mdtmeeting
	 *
	 * @return Response
	 */
	public function store()
	{
		$MDTMeeting = new MDTMeeting;
                $MDTMeeting ->date = Input::get('date');
                $MDTMeeting ->location = Input::get('location');
                $MDTMeeting ->center_id = Auth::User()->center_id;
                $MDTMeeting->save();
                $case = Input::get('case');
                for($i=0;$i<count($case);$i++)
                {
                $MDTCase = new MDTCase;
                $MDTCase->case_id = $case[$i];
                $MDTCase->MDTMeeting_id = $MDTMeeting->id;
                $MDTCase->recommendation = Input::get('recommendation')[$i];
                $MDTCase->save();
                }
                
                return Redirect::to('MDTReport/'.$MDTMeeting->id);
	}

	/**
	 * Display the specified resource.
	 * GET /mdtmeeting/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		  // get the child
		$MDTReport = MDTMeeting::find($id);
                
		// show the view and pass the nerd to it
		return View::make('MDTReport.show')
			->with('MDTReport', $MDTReport);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /mdtmeeting/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$MDTReport = MDTMeeting::find($id);
                $Mcases = new Illuminate\Database\Eloquent\Collection;
                foreach( $MDTReport->cases as $MDTCases){
                    $Mcases->add($MDTCases->info);
                }
                $cases = TrackedCase::whereNotIn('id',$Mcases->lists('id'))->where('center_id', Auth::User()->center_id)->get();
		// show the view and pass the nerd to it
		return View::make('MDTReport.edit')
			->with(array('MDTReport'=> $MDTReport, 'cases'=> $cases));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /mdtmeeting/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
            $MDTMeeting = MDTMeeting::find($id);
            $MDTMeeting ->date = Input::get('date');
            $MDTMeeting ->location = Input::get('location');
            $MDTMeeting ->center_id = Auth::User()->center_id;
            $MDTMeeting->save();
            $case = Input::get('case');
            
            foreach($MDTMeeting->cases as $OldCase){
                    $OldCase->delete();
                }
            for($i=0;$i<count($case);$i++)
            {
                
                $MDTCase = new MDTCase;
                $MDTCase->case_id = $case[$i];
                $MDTCase->MDTMeeting_id = $MDTMeeting->id;
                $MDTCase->recommendation = Input::get('recommendation')[$i];
                $MDTCase->save();
            }

            return Redirect::to('MDTReport');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /mdtmeeting/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
