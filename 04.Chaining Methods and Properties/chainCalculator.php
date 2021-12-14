<?php

class Calculator
{

    private $firstNumber;
    private $secondNumber;

    public function __construct($value1, $value2)
    {
        $this->firstNumber = $value1;
        $this->secondNumber = $value2;
    }

    public function __destruct()
    {
        echo "This is Destruct";
    }
    
    public function getInfo(){

    }

    public function Add()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function Subtract()
    {
        return $this->firstNumber - $this->secondNumber;

    }
    public function Multiply()
    {
        return $this->firstNumber * $this->secondNumber;
    }

    public function Division()
    {
        return $this->firstNumber / $this->secondNumber;
    }

    
}

$myCal = new Calculator(58,9);
echo "addition : "  . $myCal->Add(8,8) . PHP_EOL;
echo "Subtraction : "  . $myCal->Subtract()  . PHP_EOL;
echo "Multiplication : "  . $myCal->Multiply()  . PHP_EOL;
echo "Division : "  . $myCal->Division()  . PHP_EOL;

//Need a mentor to resolve it
