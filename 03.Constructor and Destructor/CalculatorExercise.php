<?php

class Calculator{

    private $firstNumber ;
    private $secondNumber;
    private $calculation;

    function __construct($value1, $value2)
    {
        $this->firstNumber = $value1;
        $this->secondNumber = $value2;
    }

    function Addition(){
        return $this->firstNumber + $this->secondNumber;
    }

    function Subtraction(){
        return $this->firstNumber - $this->secondNumber;
    }

    function Multiplication(){
        return $this->firstNumber * $this->secondNumber;
    }

    function Division() {
        return $this->firstNumber / $this->secondNumber;
    }

    function Modulus(){
        return $this->firstNumber / $this->secondNumber;
    }

    function Exponentiation(){
        return $this->firstNumber / $this->secondNumber;
    }
}


$myCalculation = new Calculator(30,20);
echo "Calculator's addition : " . $myCalculation->Addition() . PHP_EOL . "<br>";
echo "Calculator's subtract : " . $myCalculation->Subtraction() . PHP_EOL . "<br>";
echo "Calculator's Multiplication : " . $myCalculation->Multiplication() . PHP_EOL . "<br>";
echo "Calculator's Division : " . $myCalculation->Division(). PHP_EOL . "<br>";
echo "Calculator's Modulus : " . $myCalculation->Modulus(). PHP_EOL . "<br>";
echo "Calculator's Exponentiation : " . $myCalculation->Exponentiation(). PHP_EOL . "<br>";