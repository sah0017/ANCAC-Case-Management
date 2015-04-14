
<?php

class BaseController extends Controller {
    /*created by Bagget, Egui, and murphy summer 2014*/
/* this is the base controller that sets up the layout*/


	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
