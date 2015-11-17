<?php
include 'MyParent.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of itsMe
 *
 * @author akad
 */
class ItsMe extends MyParent {
    public function getAge($works, $loc) {
        $sAge = 'I am 38 years old, work as ' . $works . ' in ' . $loc;
        #$works = 'Supervisor';
        #$sAge = parent::getAge($works); 
        return $sAge;
    }
}

$oItsMe = new ItsMe();

echo $oItsMe->getAge('consultant', 'Mumbai') . PHP_EOL;
