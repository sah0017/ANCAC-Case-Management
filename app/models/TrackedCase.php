<?php

class TrackedCase extends \Eloquent {
	protected $table = 'cases';

	public function abusedChild(){
		return $this->belongsTo('abusedChild','abusedChild_id');
	}
	public function worker(){
		return $this->hasOne('worker');
	}
	public function allegedAbuser(){
		return  $this->hasOne('allegedAbuser');
	}
	public function county(){
		return $this->hasOne('county');
	}
	
}