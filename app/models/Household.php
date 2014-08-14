<?php

class Household extends \Eloquent {
	protected $fillable = [];

        public function persons() {
            return $this->hasMany('Person');
        }
        
        public function DHRCases() {
            return $this->hasMany('DHRCases');
        }
}