<?php
use LaravelBook\Ardent\Ardent;

class trackedCase extends Ardent {
	protected $table = 'cases';
	protected $fillable = ['note','caseOpened','DHRCase','custodyIssues','IOReport','domesticViolence',
		'prosecution','abuseDate','abuseLocation','reportNature','DHRDetermination','forensicEvaluation',
		'status','parentJurisdiction','chargesFiled','agencyReportedTo','talkedToChild','reportedDate'];
	
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


        public static $rules = array(
	'caseOpened'=>'date',
	'custodyIssues'=>'boolean',
	'IOReport'=>'boolean',
	'domesticViolence'=>'boolean',
	'prosecution'=>'boolean',
	'abuseDate'=>'date',
	'forensicEvaluation'=>'boolean',
	'reportedDate'=>'date'
	);
}