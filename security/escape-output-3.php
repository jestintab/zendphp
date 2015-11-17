<?php
$str = "A 'quote' « is <b>bold</b> \"Darling\" here ";


echo htmlspecialchars($str) . "\n\n";
#A 'quote' « is &lt;b&gt;bold&lt;/b&gt; &quot;Darling&quot; here

echo htmlspecialchars($str, ENT_QUOTES) . "\n\n";
#A &#039;quote&#039; « is &lt;b&gt;bold&lt;/b&gt; &quot;Darling&quot; here

echo htmlspecialchars($str, ENT_QUOTES) . "\n\n";
#A &#039;quote&#039; « is &lt;b&gt;bold&lt;/b&gt; &quot;Darling&quot; here


?>
