<?php 
/* Accepting NULL value */
function test(stdClass $obj = NULL) {
}
test(NULL);
test(new stdClass);
?> 