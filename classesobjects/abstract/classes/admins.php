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
class admins extends users implements personal, address {
    
    public function login(){
        $id = 'adminid-99';
        return $id;
    }

    public function updatePassword($sType){
        echo 'Password Updated type: ' . $sType . PHP_EOL;
        return true;
    }

     public function getAge() {
        echo 'Get admin age: 45 ' . PHP_EOL;
    }

    public function getColor() {
        echo 'Get admin color: whitish' . PHP_EOL;
    }

    public function getHeight() {
        echo 'Get admin height: 176.00 cm ' . PHP_EOL;
    }

    public function getPin() {
        echo 'Get admin PIN: 400701 ' . PHP_EOL;
    }

    public function getState() {
        echo 'Get admin state: Maharashtra ' . PHP_EOL;
    }

}
