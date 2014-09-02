<?php

class AllegedOffender extends \Eloquent {
    protected $table = "allegedOffenders";
    protected $fillable = [];
        
        public function personalInfo(){
            return $this->belongsTo('Person', 'person_id');
	}
        
        public function county(){
            return $this->belongsTo('County', 'county_id');
	}
        
        public function caseInfo(){
            return $this->belongsTo('TrackedCase', 'case_id');
	}
}