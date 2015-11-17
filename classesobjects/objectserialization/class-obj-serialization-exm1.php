<?php

/**
 * Description of class-obj-serialization
 *
 * @author akad
 */ 
  class A {
      public $one = 1;
      public $two = 2;
    
      public function show_one() {
          echo $this->one . PHP_EOL;
      }
      
      public function show_two() {
          echo $this->two . PHP_EOL;
      }
  }
  
  
    class B {
      public $one = 4;
      public $two = 7;
    
      public function show_one() {
          echo $this->one . PHP_EOL;
      }
      
      public function show_two() {
          echo $this->two . PHP_EOL;
      }
  }