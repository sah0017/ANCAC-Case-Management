<?php

class RelationType extends \Eloquent {
	protected $fillable = [];
        protected $table = "relationTypes";
        public function relationType(){
            return $this->belongsTo('relationType', 'relationType_id');
	}
}