    <?php

    // show them a message to enter their name
    echo "Tell us your name: " . PHP_EOL;

    // the script will wait here until the user has entered something and hit ENTER
    $name = read_stdin();

    // This will display the thank you message including their name they entered.
    echo "Thank you $name. Welcome to my site" . PHP_EOL;

    // our function to read from the command line
    function read_stdin()
    {
            $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
            $input = fgets($fr,128);        // read a maximum of 128 characters
            $input = rtrim($input);         // trim any trailing spaces.
            fclose ($fr);                   // close the file handle
            return $input;                  // return the text entered
    }

    ?>