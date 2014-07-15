<?php

class AbusedChild extends \Eloquent {
	protected $table = 'abusedChildren';
	protected $fillable = [];
	
        public function personalInfo(){
            return $this->belongsTo('person', 'person_id');
	}
        
        public function relation() {
            return $this->hasMany('Relationship');
        }
        
        public function sessions() {
            return $this->belongsToMany('Session');
        }
        
        
}