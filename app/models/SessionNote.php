<?php

class SessionNote extends \Eloquent {
	protected $fillable = [];
        
        public function worker() {
            return $this->belongsTo('Worker');
        }
}