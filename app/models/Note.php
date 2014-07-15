<?php

class Note extends \Eloquent {
	protected $fillable = [];
        
        public function worker() {
            return $this->belongsTo('Worker');
        }
}