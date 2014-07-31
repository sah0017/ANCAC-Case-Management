<?php

class AllegedOffender extends \Eloquent {
    protected $table = "allegedOffenders";
    protected $fillable = [];
        
        public function personalInfo(){
            return $this->belongsTo('person', 'person_id');
	}
        
        public function county(){
            return $this->belongsTo('county', 'county_id');
	}
        
        public function caseInfo(){
            return $this->belongsTo('case', 'case_id');
	}
}