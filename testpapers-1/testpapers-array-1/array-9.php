<?php
    $car = array(
        'year'  => 2010,
        'make'  => 'Porsche',
        'model' => 911
    );

   next($car);

    foreach ($car as $k => $v) {
        echo $v;
    }
?>

<?php
    $numbers = array(5, 6, 7, 8);
    end($numbers);

    while (key($numbers)) {
        echo current($numbers) . PHP_EOL;
        prev($numbers);
    }
?>


<?php
    class SomeClass implements Iterator, Countable {
        
        private $_values = array(1, 2, 3, 4);
    
        public function current() {
            return current($this->_values);
        }

        public function key() {
            return key($this->_values);
        }

        public function next() {
            return next($this->_values);
        }

        public function rewind() {
            return rewind($this->_values);
        }

        public function valid() {
            return isset($this->_values);
        }

        public function count($mode = 'COUNT_NORMAL') {
            return sizeof($this->_values);
        } 
}

    $obj = new SomeClass;
    echo $obj->count();
    for($i = 0; $i < $obj->count(); $i++){
        echo $obj->current();
        $obj->next();
    }
    
    //41234
    
?>

