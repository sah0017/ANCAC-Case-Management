<?php

class MDTCase extends \Eloquent {
	protected $fillable = [];
        protected $table = "MDTCases";
        
        public function meeting(){
            return $this->belongsTo('MDTMeeting', 'MDTMeeting_id');
        }
        public function info(){
            return $this->belongsTo('TrackedCase', 'case_id');
        }
}