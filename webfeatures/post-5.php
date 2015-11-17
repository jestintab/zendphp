<!-- Example #1 File Upload Form 
A file upload screen can be built by creating a special form which looks something like this:
-->
<!-- The data encoding type, enctype, MUST be specified as below -->
<?php 
session_start();
session_regenerate_id();
print_r($_POST) . PHP_EOL;;
echo session_id() . PHP_EOL;
echo session_cache_expire() . PHP_EOL;;
?>
<form  name="getAddress" action="post-5.php" method="POST"> 
    <input type="text" name="name[]" value="anupama" />
    <input type="text" name="name[]" value="dhananjay" /> 
    <input type="text" name="name address" value="106 Ambe Bhakti with space " />
    <input type="text" name="name.address_2" value="106 Ambe Bhakti with . " />
    <input type="submit" value="Save" />
</form
