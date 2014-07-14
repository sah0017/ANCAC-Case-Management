<?php
use LaravelBook\Ardent\Ardent;

class trackedCase extends Ardent {
	protected $table = 'cases'
	protected $fillable = ['note','caseOpened','DHRCase','custodyIssues','IOReport','domesticViolence',
		'prosecution','abuseDate','abuseLocation','reportNature','DHRDetermination','forensicEvaluation',
		'status','parentJurisdiction','chargesFiled','agencyReportedTo','talkedToChild','reportedDate'];
	
	public function abusedChild(){
		return $this->belongsTo('AbusedChild', 'abusedChild_id');
	}
	public function worker(){
		return $this->hasOne('worker');
	}
	public function allegedAbuser(){
		return  $this->hasOne('allegedAbuser');
	}
	public function county(){
		return this->hasOne('county');
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
	)
}