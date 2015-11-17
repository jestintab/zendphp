<!-- Example #3 Uploading array of files
PHP supports HTML array feature even with files.
-->
<form action="post-4.php" method="post" enctype="multipart/form-data">
<p>Pictures:
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="submit" value="Send" />
</p>
</form>
