<?php

class Person extends \Eloquent {
	protected $fillable = [];
	protected $table = 'persons';
        
        public  function getNameAttribute ()
        {
            return "$this->first $this->middle $this->last";
        }

        
        public function relation() {
            return $this->hasMany('Relationship');
        }
        
        public function ethnicity() {
            return $this-belongsTo('Ethnicity');
        }
        
        public function address() {
            return $this->belongsTo('Address');
        }
        
        public function household() {
            return $this->belongsTo('Household');
        }
        
        
}