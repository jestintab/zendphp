<?php
$existed = stream_get_wrappers();
print_r($existed);

streamWrapper::rename ('/var/www/html/test.php', '/var/www/html/test2.php');