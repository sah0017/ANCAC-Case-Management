<?php

class Relationship extends \Eloquent {
	protected $fillable = [];
        public function personalInfo(){
            return $this->belongsTo('person', 'person_id');   
	}
        public function child(){
            return $this->belongsTo('abusedChild','abusedChild_id');
	}
}