<?php
#Example #1 Declaring a single namespace
namespace MyProject;
const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

namespace MyProjectAnother;
const CONNECT_OK = 44;
class Connection { /* ... */ }
function connect() { /* ... */  }

$ns1 =  \MyProject\CONNECT_OK;

$ns2 =  \MyProjectAnother\CONNECT_OK;

echo $ns1. "\n\n";
echo $ns2. "\n\n";
?>
