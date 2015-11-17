<?php
#Example #3 Multiple interface inheritance
interface a {
    public function foo();
}

interface b
{
    public function bar();
}

interface c extends a, b
{
    public function baz();
    public function taz();
    
    #private function taz(); PHP Fatal error:  Access type for interface method c::taz() must be omitted in /media/linux-on/certification/php5.5zendcertification/more/phpcert/classesobjs/class-interface-3.php on line 16

}

/*
 if a and b are class trying to implements:
	PHP Fatal error:  c cannot implement a - it is not an interface in /media/linux-on/certification/php5.5zendcertification/more/phpcert/classesobjs/class-interface-3.php on line 13
 
 if method foo of interface a has body
	PHP Fatal error:  Interface function a::foo() cannot contain body in /media/linux-on/certification/php5.5zendcertification/more/phpcert/classesobjs/class-interface-3.php on line 5

 * */
class d implements c
{
    public function foo() { }

    public function bar() { }

    public function baz()  { }
    public function taz(){}
    
	public function aaz(){}
}
?>
