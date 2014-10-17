<?php

class MDTMeeting extends \Eloquent {
	protected $fillable = [];
        
        public function cases(){
            return $this->hasMany('MDTCase','MTDMeeting_id');
        }
}