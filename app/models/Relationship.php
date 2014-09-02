<?php

class Relationship extends \Eloquent {
	protected $fillable = [];
        public function personalInfo(){
            return $this->belongsTo('Person', 'person_id');   
	}
        public function child(){
            return $this->belongsTo('AbusedChild','abusedChild_id');
	}
        
        public function relationType(){
            return $this->belongsTo('RelationType', 'relationType_id');
	}
}