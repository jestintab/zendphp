<?php
#Example #1 Basic HTTP Authentication example
print_r($_SERVER);
echo "<br/><br/>--------------";
echo "<br/><br/>";
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
echo "<br/><br/>--------------";
echo "<br/><br/>";
print_r($HTTP_SERVER_VARS);
?>
