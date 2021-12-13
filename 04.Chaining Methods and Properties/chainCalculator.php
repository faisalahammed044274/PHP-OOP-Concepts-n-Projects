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
    
    function getNum(){
        echo $this->chain .PHP_EOL;
        return $this;
    }
}

echo "<h1>Not Completed</h1>";