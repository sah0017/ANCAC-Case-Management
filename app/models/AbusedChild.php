<?php

class AbusedChild extends \Eloquent {
	protected $table = 'abusedChildren';
	protected $fillable = [];
	
        public function personalInfo(){
            return $this->belongsTo('person', 'person_id');
	}
        
        public function relations() {
            return $this->hasMany('Relationship','abusedChild_id');
        }
        
        public function sessions() {
            return $this->belongsToMany('CaseSession','abusedchild_session','abusedChild_id','session_id');
        }
        
        
}
