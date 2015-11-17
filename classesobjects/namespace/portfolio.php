<?php
include 'Database.php';
include 'Validator.php';
include 'Form.php';

use babybump\form as bbform;
 
new babybump\Database();
new babybump\Validator();
new bbform\Form();

echo babybump\API_KEY . PHP_EOL;

echo API_KEY . PHP_EOL;
