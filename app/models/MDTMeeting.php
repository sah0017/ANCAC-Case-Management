<?php

class MDTMeeting extends \Eloquent {
	protected $fillable = [];
        protected $table = "MDTMeetings";
        
        public function cases(){
            return $this->hasMany('MDTCase','MTDMeeting_id');
        }
}