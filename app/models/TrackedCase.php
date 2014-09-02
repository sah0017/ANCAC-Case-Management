<?php

class TrackedCase extends \Eloquent {
	protected $table = 'cases';

	public function abusedChild(){
		return $this->belongsTo('AbusedChild','abusedChild_id');
	}
	public function worker(){
		return $this->hasOne('Worker');
	}
	public function county(){
		return $this->belongsTo('County');
	}
        public function allegedOffenders(){
            return $this->hasMany('AllegedOffender','case_id');
        }
        public function workers(){
            return $this->belongsToMany('Worker','case_worker','case_id','worker_id');
        }
        public function abuses(){
            return $this->belongsToMany('AbuseType','abuses','case_id','abuseType_id');
        }

}