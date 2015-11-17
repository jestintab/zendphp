<?php 
include 'address.php';
include 'personal.php';
include 'users.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of guest
 *
 * @author akad
 */
class guests extends users implements address , personal {
    
   public function login(){
        $id = 'userid-99';
        return $id;
    }

    public function updatePassword($sType){
        echo 'Password Updated type: ' . $sType . PHP_EOL;
        return true;
    }

    public function getAge() {
        echo 'Get user age: 55 ' . PHP_EOL;
    }

    public function getColor() {
        echo 'Get user color: whitish' . PHP_EOL;
    }

    public function getHeight() {
        echo 'Get user height: 165.00 cm ' . PHP_EOL;
    }

    public function getPin() {
        echo 'Get user PIN: 821307 ' . PHP_EOL;
    }

    public function getState() {
        echo 'Get user state: Bihar ' . PHP_EOL;
    }

}
