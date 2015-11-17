<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 *
 * @author akad
 */
interface interfaceexm1 {
    
    public function getAge(); 
    public function getPin();    
    public function getState();
}

interface interfaceexm2 {
    public function getPin();
    #public function getAge();
   //public function getCity();
}

class user implements interfaceexm1, interfaceexm2{
    public function getAge() {
        echo 'get age 99 ' . PHP_EOL;
    }

    public function getCity() {
         echo 'get city Patna' . PHP_EOL;
    }

    public function getState() {  
        echo 'get Bihar' . PHP_EOL;
    }

    public function getPin() {
        echo 'get Pin 821307 ' . PHP_EOL;
    }

}

$oUser = new user();

echo $oUser->getAge();

echo $oUser->getPin();