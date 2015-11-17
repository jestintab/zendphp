<?php

include('classes/admins.php');

$oAdmins = new admins();

echo $oAdmins->getAppId() . PHP_EOL;

echo 'Login status: ' . $oAdmins->login() . PHP_EOL;

$sType = 'admins';
echo 'Password updated status: ' . $oAdmins->updatePassword($sType) . PHP_EOL;

echo $oAdmins->getAge() . PHP_EOL;

echo $oAdmins->getPin() . PHP_EOL;