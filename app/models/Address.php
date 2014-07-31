<?php

class Address extends \Eloquent {
	protected $fillable = [];
        public function counties(){
            return $this->belongsTo('county', 'county_id');
	}
}