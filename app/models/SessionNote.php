<?php

class SessionNote extends \Eloquent {
	protected $fillable = [];
        protected $table = "sessionNotes";
        
        public function worker() {
            return $this->belongsTo('Worker');
        }
}