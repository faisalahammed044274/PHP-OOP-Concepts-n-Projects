<?php
// 1) Write a Bank Class
// 2) Define balance as Properties and hide it so that is cannot be accessed via object.
// 3) Define Public Methods
// 	- getBalance
// 	- depositAmount
// 	- deductAmount
// 4) Set the Initial Balance via the Construct


class Bank{

    private $balance;

    function getBalance(){
        return $this->balance;
    }

    function __construct($balance){
        $this->balance = $balance;
    }

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
    }

    function deductAmount($amt){
        if ($this->balance <= 0){
            echo "No Balance in the Amount." . PHP_EOL;
            return;
        }

        if($this->balance < $amt){
            echo "Requested amount is greater then Balance." . PHP_EOL;
            return;
        }

        $this->balance = $this->balance - $amt;
    }
}


$bank1 = new Bank(100);
echo "Starting Amount : " . $bank1->getBalance() . PHP_EOL;
$bank1->depositAmount(700);
echo "Deposit Amount : " . $bank1->getBalance() . PHP_EOL;
$bank1->deductAmount(400);
echo "Current Balance : " . $bank1->getBalance() . PHP_EOL;

?>