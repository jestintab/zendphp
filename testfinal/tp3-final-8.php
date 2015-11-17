<?php
$dsn = 'mysql:host=localhost;dbname=phpcert_db';
$username = 'root';
$password = '123456';
$db = new PDO($dsn, $username, $password);
$attributes = array(
    "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
    "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
    "TIMEOUT"
);
foreach ($attributes as $val) {
    echo "PDO::ATTR_$val: ";
    echo $db->getAttribute(constant("PDO::ATTR_$val")) . "\n";
}
?> 