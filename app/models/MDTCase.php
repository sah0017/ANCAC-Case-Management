<?php

class MDTCase extends \Eloquent {
	protected $fillable = [];
        
        public function meeting(){
            return $this->belongsTo('MDTMeeting', 'MDTMeeting_id');
        }
}