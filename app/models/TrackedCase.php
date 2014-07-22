<?php

class TrackedCase extends \Eloquent {
	protected $table = 'cases';

	public function abusedChild(){
		return $this->hasOne('abusedChild');
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