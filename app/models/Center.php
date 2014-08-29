<?php

class Center extends \Eloquent {
	protected $fillable = [];
        public function getConnection()
        {
            return static::resolveConnection('mysql2');
        }
}