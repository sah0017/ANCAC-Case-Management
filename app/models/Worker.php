<?php

class Worker extends \Eloquent {
	protected $fillable = [];
        public function job(){
            return $this->belongsTo('workerType', 'workerType_id');
	}
}