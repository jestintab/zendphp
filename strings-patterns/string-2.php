<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text <b> i am here </b></a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<a><b>');
?>

<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');
?>
