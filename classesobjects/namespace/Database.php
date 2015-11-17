<?php

namespace babybump;
 
use \DateTime;

class Database{
	public $md5DataKey;
		
	public function __construct(){
		$this->md5DataKey = md5(time());
		echo 'I am in ' . __CLASS__ . ", Time value " . $this->md5DataKey . PHP_EOL;
		$dtObj = new \DateTime();
		var_dump($dtObj);
	}
}

$md5DataKey = md5(time());
define ('API_KEY', $md5DataKey);// global

const API_KEY = '5d2abd4165ae8f5283e9251440cac16e';