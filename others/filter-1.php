<?php
var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));

var_dump(filter_var('http://example.com/', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
?>
