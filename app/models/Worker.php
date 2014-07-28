<?php

class Worker extends \Eloquent {
	protected $fillable = [];
        public function workerType(){
            return $this->belongsTo('workerType', 'workerType_id');
	}
}