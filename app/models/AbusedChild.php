<?php

class AbusedChild extends \Eloquent {
	protected $table = 'abusedChildren';
	protected $fillable = [];
	
		public function personalInfo(){
		return $this->belongsTo('person', 'person_id');
	}
}