<?php
//Example #1 Fetch a page and send POST data

$postdata = http_build_query(
    array(
        'var1' => 'some content',
        'var2' => 'dde hiujdh jsfh fsjoh'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context = stream_context_create($opts); 
$result = file_get_contents('http://127.0.0.1/newphpcertw/io/submit.php', false, $context); 
print_r($result); 
?>