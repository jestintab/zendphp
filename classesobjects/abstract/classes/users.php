<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author akad
 */

abstract class users {
    public $appId = null;
    
    public function __construct() {
        $this->appId = 'app-12457868';
    }
    
    public function getAppId(){
        return $this->appId;
    }
    
    abstract public function login();

    abstract public function updatePassword($sType);
}
