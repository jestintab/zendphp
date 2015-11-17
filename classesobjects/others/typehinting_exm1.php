<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of typehinting-exm1
 *
 * @author akad
 */
class typehinting_exm1 {
    public $name = "kuhoo";
    public $age = 0;
    public function getName(typehinting_exm1 $nm){ 
        return $this->name;
    }
    
    public function getAge(typehinting_exm1 $nm){ 
        return $this->age;
    }
    
    public function processUserDetails(Array $arr){
        $this->name = $arr['name'];
        $this->age = $arr['age'];
    }
    
    public function processStates(ArrayObject $states){// ArrayObject
       $statesItr = $states->getIterator();
        
       for($statesItr; $statesItr->valid(); $statesItr->next()){
           echo $statesItr->key(). ' : ' . $statesItr->current() . PHP_EOL;
       }
    }
    
    public function processStatesItr(ArrayIterator $statesItr){// ArrayIterator 
       for($statesItr; $statesItr->valid(); $statesItr->next()){
           echo $statesItr->key(). ' : ' . $statesItr->current() . PHP_EOL;
       }
    }
}

$obj = new typehinting_exm1();

$aPerson = array("name" => "kuhoo", "age" => 7);

//$aPerson = 0;// PHP Catchable fatal error:  Argument 1 passed to typehinting_exm1::processUserDetails() must be of the type array, integer given, called in
$obj->processUserDetails($aPerson);

echo $obj->getName($obj) . PHP_EOL; 
echo $obj->getAge($obj) . PHP_EOL;

$obj->age = 55;
$obj->name = "NJP";
$aPerson = 0;//PHP Catchable fatal error:  Argument 1 passed to typehinting_exm1::getName() must be an instance of typehinting_exm1, integer given, called in
//echo $obj->getName($aPerson) . PHP_EOL;
echo $obj->getName($obj) . PHP_EOL; 
echo $obj->getAge($obj) . PHP_EOL;

 
$aStates = array('Bihar', 'Delhi', 'Goa');

echo "Printing ArrayObject" . PHP_EOL;
$aStatesObj= new ArrayObject($aStates);
$obj->processStates($aStatesObj);

echo "Printing ArrayIterator 1:" . PHP_EOL;
$aStatesItr = $aStatesObj->getIterator(); 
$obj->processStatesItr($aStatesItr);
 
echo "Printing ArrayIterator 2:" . PHP_EOL;
$aStatesItr = new ArrayIterator($aStates); 
$obj->processStatesItr($aStatesItr);


echo "Printing ArrayIterator 3:" . PHP_EOL; 
//$obj->processStatesItr($aStatesObj);//PHP Catchable fatal error:  Argument 1 passed to typehinting_exm1::processStatesItr() must be an instance of ArrayIterator, instance of ArrayObject given, called

