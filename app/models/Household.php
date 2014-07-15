<?php

class Household extends \Eloquent {
	protected $fillable = [];

        public function persons() {
            return $this->hasMany('Persons');
        }
        
        public function DHRCases() {
            return $this->hasMany('DHRCases');
        }
}