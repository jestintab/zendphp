<?php
class A{
  public $my_var;
    function __construct() {
      $this->my_var = 'aaa'; 
    }
  }

    $a = new A;

    $b = clone $a;
    $b->my_var = 'bbb';

    echo('1. ' . $a->my_var) . PHP_EOL;   // 'aaa'
    echo('2. ' . $b->my_var) . PHP_EOL;   // 'bbb'
    echo('3. ' . $a->my_var) . PHP_EOL;   // 'aaa'

    $c = new A;
    $d = $c;
    $d->my_var = 'ccc';

    $e = clone $d;
    $e->my_var = 'eee';
    echo('4.a. ' . $e->my_var) . PHP_EOL;   // 'ccc'
    echo('4. ' . $a->my_var) . PHP_EOL;   // 'aaa'
    echo('5. ' . $c->my_var) . PHP_EOL;   // 'ccc'
    echo('6. ' . $d->my_var) . PHP_EOL;   // 'ccc'
?>