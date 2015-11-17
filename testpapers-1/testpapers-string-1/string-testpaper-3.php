<?php
    $str = "days=Mon&days=Wed"
         . "&fruit[1]=Apple&fruit[]=Banana&age=13";

    parse_str($str, $output);

    print_r($output);
    
    echo " --- " . PHP_EOL;
    
    
    // gettype will return 'array' or 'string'
    echo gettype($output['days']);

    echo ' - ';

    // array_search will return the key
    // where the first argument is located
    echo array_search('Banana', $output['fruit']);

    echo ' - ';

    echo array_key_exists('age', $output) ? $output['age'] : 0;
?>


<?php
    $html = '<p>line1line2<li>ABC</p>';
    echo strip_tags($html, '<li>');
?>

<?php
    $name = 'John';

        $str = <<<EOF
Hello $name
    EOF;

    echo trim($str);
?>