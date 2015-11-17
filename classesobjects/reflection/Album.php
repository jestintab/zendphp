<?php
error_reporting(E_ALL);
ini_set('display_error', true);

class Album{
	
	private $path = null;
	
	public function __construct (){
		 echo "I am in class : " . __CLASS__ . ", function : " . __FUNCTION__;
	}
	
	public function setPath($path){
		$this->path = $path;
	}
	
	public function getPath(){
		return $this->path;
	}
	
	public function isPathExist(){
		$path = $this->path;
		
		if (file_exists($path)){
			echo "This path exist " . $path . PHP_EOL;
		}
		else{
			echo "This path does not exist " . $path . PHP_EOL;
		}
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
/* ReflectionClass -- class details */

$rc = Reflection::export(new ReflectionClass('Album'));

echo "<pre>";
print_r($rc, true);
echo "" . PHP_EOL;


/* ReflectionMethod -- method details*/
$rm = Reflection::export(new ReflectionMethod('Album', 'getPath'));

echo "<pre>";
print_r($rm, true);
echo "" . PHP_EOL;

/* Class methods by get_class_methods */
$rm1 = get_class_methods(new Album());
echo "<pre>";
foreach ($rm1 as $method_name) {
    echo "$method_name" . PHP_EOL;
}


/* ReflectionMethod -- ivoking method using ReflectionMethod API*/
$albumObj = new Album();
$rm2 = new ReflectionMethod('Album', 'getCurrentAge');

$currAge = $rm2->invokeArgs($albumObj, ['1976-01-22', 'Dhananjay']);

echo "Current Age : " . $currAge . PHP_EOL;
echo "" . PHP_EOL;
