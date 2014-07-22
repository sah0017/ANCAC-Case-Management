<?php


class trackedCase extends \Illuminate\Database\Eloquent {
	protected $table = 'cases';

	
	public function abusedChild(){
		return $this->belongsTo('AbusedChild', 'abusedChild_id');
	}
	public function primaryWorker(){
		return $this->hasOne('Worker');
	}
	public function allegedAbuser(){
		return  $this->hasOne('AllegedAbuser');
	}
	public function county(){
		return $this->hasOne('County');
	}
        public function workers() {
            return $this->hasMany('Worker');
        }
        public function abuseType() {
            return $this->belongsTo('AbuseType');
        }

}