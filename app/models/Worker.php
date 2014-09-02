<?php

class Worker extends \Eloquent {
	protected $fillable = [];
        public function workerType(){
            return $this->belongsTo('WorkerType', 'workerType_id');
	}
}