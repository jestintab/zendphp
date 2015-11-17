<?php
// Example use of getenv()
$ip = getenv('REMOTE_ADDR');

echo $ip . PHP_EOL;

// Or simply use a Superglobal ($_SERVER or $_ENV)
$ip = $_SERVER['REMOTE_ADDR'];

echo $ip . PHP_EOL;
?>

<?php
echo 'My username is ' .$_ENV["USER"] . '!';
?>
