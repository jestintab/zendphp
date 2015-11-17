<?php
error_reporting(E_ALL);
ini_set('display_error', true);

class UserParam{
	private $relative = ['Anupama', 'Dhananjay', 'Kuhoo', 'Darsh'];
	
	public function __construct (){
		 echo "I am in class : " . __CLASS__ . ", function : " . __FUNCTION__;
	}
	
	public function setData(array $date, $data = 1){
		
	}
	
	public function getCurrentAge($dob, $name){
		echo 'Invoked' . PHP_EOL;
		print 'Name: '. $name . ', DOB: '. $dob . PHP_EOL;
		
		$currYear = date('Y');
		$dobYear = date('Y', strtotime($dob));
		echo "C : {$currYear}, D : {$dobYear}" . PHP_EOL;
		$currAge = $currYear - $dobYear;
		return $currAge;
	}
}
/* ReflectionProperty -- property details */

$objUser = new UserParam();

$rp = new ReflectionParameter(['UserParam','setData'], 0);

echo "Line 1: ". $rp->isArray();
echo "" . PHP_EOL;

 
