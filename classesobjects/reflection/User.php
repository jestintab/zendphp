<?php
error_reporting(E_ALL);
ini_set('display_error', true);

class User{
	private $relative = ['Anupama', 'Dhananjay', 'Kuhoo', 'Darsh'];
	
	public function __construct (){
		 echo "I am in class : " . __CLASS__ . ", function : " . __FUNCTION__;
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

$objUser = new User();

$rp = new ReflectionProperty('User', 'relative');
$rp->setAccessible(true);

echo "Line 1: ". $rp->getName();
echo "" . PHP_EOL;

echo "Line 2: ". print_r($rp->getValue($objUser), true);
echo "" . PHP_EOL;

 
