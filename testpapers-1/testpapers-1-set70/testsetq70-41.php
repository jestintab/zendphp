<?php
Interface Verifiable
{
   public function verify();
  
}
Class Cheque
{
   public function verify() {
      // interesting stuff happens
      return true;
   }
}
interface CheckType{
     public function checkType();
}

Class CurrencyCheque extends Cheque implements Verifiable, CheckType {

    public function checkType() {
        echo "At Par";
    }

}

$oCC = new CurrencyCheque();

echo $oCC->verify() . PHP_EOL;
echo $oCC->checkType() . PHP_EOL;