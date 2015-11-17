<?php

include('classes/guests.php');

$oGuests = new guests();

echo $oGuests->getAppId() . PHP_EOL;

echo 'Login status: ' . $oGuests->login() . PHP_EOL;

$sType = 'users';
echo 'Password updated status: ' . $oGuests->updatePassword($sType) . PHP_EOL;

echo $oGuests->getAge() . PHP_EOL;

echo $oGuests->getPin() . PHP_EOL;