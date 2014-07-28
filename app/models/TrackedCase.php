<?php

class TrackedCase extends \Eloquent {
	protected $table = 'cases';

	public function abusedChild(){
		return $this->belongsTo('abusedChild','abusedChild_id');
	}
	public function worker(){
		return $this->hasOne('worker');
	}
	public function county(){
		return $this->hasOne('county');
	}
	
}