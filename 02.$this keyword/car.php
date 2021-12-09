<?php

class Car{
    public $name = "";
    public $age = 10; //Class Properties

    //How to Access properties Via Methods

    //Getter Methods
    function getName() : string{
        return $this->name;
    }

    //Setter methods
function setName($name) {
    $age = 13; //This is called as a Local Variable 
    $this->age = $age;
    $this->name = $name;
}
}

$car1 = new Car();
//Example 1 = getter and setter methods
$car1->setName("BMW");
echo $car1->getName() . PHP_EOL;

//Example 2 = change properties from outside
$car1->name = "Ferrari";
echo $car1->getName() . PHP_EOL;

//Example 3 = Independent Objects
$car2 = new Car();
$car2->name = "Hundai";
echo $car1->getName() .PHP_EOL;
echo $car2->getName() .PHP_EOL;


