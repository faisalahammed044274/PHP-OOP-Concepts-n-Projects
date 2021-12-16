<?php

// 1) Create a Bank Class
// 2) Define Properties of Bank Class
// 	- accno
// 	- name
// 	- balance
// 3) Define Methods
// 	- depositAmount($amt)
// 	- deductAmount($amt)
// 	- checkBalance()
// 4) Create an Account for User
// 5) CheckBalance, DepositAccount, DeductAmount

class Bank{

    public $accno;
    public $name;
    public $balance;

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
    }

    function deductAmount($amt){
        
        // if($this->balance <= 0){
        //     print_r("no balance in the account." . PHP_EOL) ;
        //     return;
        // }

        // if($this->balance <= $amt){
        //     print_r("Requested Amount is greater than Balance." . PHP_EOL);
        //     return;
        // }

        $this->balance = $this->balance - $amt;

    }

    function checkBalance(){

        echo "Your Account Balance : $this->balance" . PHP_EOL; 

    }
}

$bank1 = new Bank(500);
$bank1->accno = 101;
$bank1->name = "Faisal Ahammed";
$bank1->balance = 500;

$bank1->checkBalance();
$bank1->depositAmount(500);
$bank1->checkbalance();
$bank1->deductAmount(100);
$bank1->checkbalance();
$bank1->deductAmount(100);
$bank1->checkbalance();
$bank1->deductAmount(5200);
$bank1->checkBalance();
