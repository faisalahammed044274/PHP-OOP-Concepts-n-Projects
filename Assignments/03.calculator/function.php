<?php

class Calculation
{

    public function add($a, $b)
    {
        echo "addition = " . ($a + $b). "<br>";
    }
    public function sub($a, $b)
    {
        echo "Substraction = " . ($a - $b) . "<br>";
    }
    public function mul($a, $b)
    {
        echo "Multiplication = " . ($a * $b) . "<br>";
    }
    public function div($a, $b)
    {
        echo "Division = " . ($a / $b) . "<br>";
    }

}
