<?php

class CaseSession extends \Eloquent {
	protected $fillable = [];
        
        protected $table = "sessions";
        
        public function type() {
           return $this->belongsTo('ServiceType','serviceType_id');
            
        }

        public function primaryWorker() {
            return $this->belongsTo('Worker','worker_id');
        }
        public function workers() {
            return $this->belongsToMany('Worker','session_worker','session_id','worker_id');
        }
        
        public function notes() {
            return $this->hasMany('SessionNote','session_id');
        }
        
        
}