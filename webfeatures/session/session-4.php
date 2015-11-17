<?php
//Example #1 A session_regenerate_id() example

session_start();

$old_sessionid = session_id();

session_regenerate_id();

$new_sessionid = session_id();

echo "Old Session: $old_sessionid" . PHP_EOL;
echo "New Session: $new_sessionid" . PHP_EOL;

print_r($_SESSION);


/* set the session name to WebsiteID */

$previous_name = session_name("WebsiteID");

echo $previous_name . PHP_EOL;

?>
