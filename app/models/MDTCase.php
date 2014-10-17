<?php

class MDTCase extends \Eloquent {
	protected $fillable = [];
        protected $table = "MDTCases";
        
        public function meeting(){
            return $this->belongsTo('MDTMeeting', 'MDTMeeting_id');
        }
}