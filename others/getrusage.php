
<?php
$dat = getrusage();
echo $dat["ru_nswap"];         // number of swaps
echo $dat["ru_majflt"];        // number of page faults
echo $dat["ru_utime.tv_sec"];  // user time used (seconds)
echo $dat["ru_utime.tv_usec"]; // user time used (microseconds)
?>
