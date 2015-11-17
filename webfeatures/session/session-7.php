<?php
//Example #1 session_cache_limiter() example
/* set the cache limiter to 'private' */

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

echo "The cache limiter is now set to $cache_limiter" . PHP_EOL;
?>
