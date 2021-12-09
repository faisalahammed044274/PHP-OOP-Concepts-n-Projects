<?php

// Assignments: Write a Calculator Class using $this Keyword
// 1) Create a Calculator Class
// 2) Define $a, $b and $result as Properties
// 3) Write Getter and Setter Methods.
// 4) Write Add Method to add the values and store it in the results properties.
// 5) Use the getResults() Method to print the results.


class Calculator{
    public $a;
    public $b;
    public $result;

    

    function setA($a) {
        $this->a = $a;
    }

    function getA() {
       return ($this->a) ; 
    }

    function setB($b){
        $this->b = $b;
    }
    function getB() {
        return ($this->b);
    }

    function add(){
         return ($this->getA() + $this->getB());
    }

    function getResults(){
        echo "My Result is :" .  $this->add();
    }
}

$myres1 = new Calculator;
$myres1->setA(5);
$myres1->setB(7);
$myres1->getResults();