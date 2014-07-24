<?php

class AllegedAbuser extends \Eloquent {
	protected $fillable = [];
        protected $table = 'allegedAbusers';
        
        public function personalInfo(){
            return $this->belongsTo('person', 'person_id');
	}
        
        public function relation() {
            return $this->hasMany('Relationship');
        }
}

