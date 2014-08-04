<?php

class CaseSession extends \Eloquent {
	protected $fillable = [];
        
        protected $table = "sessions";
        
        public function type() {
            return $this->blongsTo('ServiceType');
        }

        public function primaryWorker() {
            return $this->belongsTo('Worker');
        }
        public function workers() {
            return $this->belongsToMany('Worker');
        }
        
        public function notes() {
            return $this->hasMany('Note');
        }
        
        
}