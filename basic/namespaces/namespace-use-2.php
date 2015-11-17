<?php
namespace Foo\Bar;
include 'namespace-use-1.php';
include 'namespace-use-1a.php';

const FOO = 'foo val 2';
function foo() {
		echo "I m in file 2 " . "\n\n";
	}
class foo
{
    static function staticmethod() {
		echo "I m in static file 2 " . "\n\n";
	}
}

/* Unqualified name */
foo(); // resolves to function Foo\Bar\foo
foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo "/* Unqualified name */" . FOO ."\n\n"; // resolves to constant Foo\Bar\FOO

/* Qualified name */
subnamespace\foo(); // resolves to function Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod(); // resolves to class Foo\Bar\subnamespace\foo, // method staticmethod
echo "/* Qualified name */" . subnamespace\FOO ."\n\n"; // resolves to constant Foo\Bar\subnamespace\FOO

drink\foo();
drink\foo::staticmethod();
echo "/* Qualified name */" . drink\FOO ."\n\n"; // resolves to constant Foo\Bar\drink\FOO


/* Fully qualified name */
\Foo\Bar\foo(); // resolves to function Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // resolves to class Foo\Bar\foo, method staticmethod
echo "/* Fully qualified name */" .  \Foo\Bar\FOO ."\n\n"; // resolves to constant Foo\Bar\FOO

?>
