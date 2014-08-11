<?php

class DHRCase extends \Eloquent {
	protected $fillable = [];
        protected $table = 'DHRCases';
        
        public function housedold() {
            return $this->hasMany('Household');
        }
        
        public function cases() {
            return $this->hasMany('Cases');
        }
}