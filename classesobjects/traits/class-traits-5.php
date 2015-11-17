<?php
# Example #5 Conflict resolution
trait A {
    public function smallTalk() {
        echo 'a' . "\n";
    }
    public function bigTalk() {
        echo 'A' . "\n";
    }
}

trait B {
    public function smallTalk() {
        echo 'b' . "\n";
    }
    public function bigTalk() {
        echo 'B' . "\n";
    }
}

class Talker {
    use A, B {
        A::smallTalk insteadof B;
        B::bigTalk insteadof A;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

$oAT = new Aliased_Talker();
echo $oAT->bigTalk();
echo $oAT->smallTalk();

$oT = new Talker();
echo $oT->smallTalk();
echo $oT->bigTalk();


?>
