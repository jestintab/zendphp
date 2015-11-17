<?php
//Example #1 Soundex Examples
soundex("Euler")       == soundex("Ellery");    // E460
soundex("Gauss")       == soundex("Ghosh");     // G200
soundex("Hilbert")     == soundex("Heilbronn"); // H416
soundex("Knuth")       == soundex("Kant");      // K530
soundex("Lloyd")       == soundex("Ladd");      // L300
soundex("Lukasiewicz") == soundex("Lissajous"); // L222

echo soundex("Euler") . "\n";
echo soundex("Ellery") . "\n\n";

echo soundex("here") . "\n";
echo soundex("hear") . "\n\n";

echo soundex("hey") . "\n";
echo soundex("hay") . "\n\n";

?>
