<?php

    Class Cars{
        public $name;
        public $color;

        function setName($name1) {
            $this->name = $name1;
        }

        function setColor($color1) {
            $this->color = $color1;
        }
    }


$sportsCar = new Cars();
$sportsCar->setName("Ferrari");
$sportsCar->setColor("red");

$modernCar = new Cars();
$modernCar->setName("BMW");
$modernCar->setColor("Blue");

$budgetCar = new Cars();
$budgetCar->setName("Hundai");
$budgetCar->setColor("Black");

echo "Car: $sportsCar->name is $sportsCar->color". PHP_EOL."<br>";
echo "Car: $modernCar->name is $modernCar->color". PHP_EOL."<br>";
echo "Car: $budgetCar->name is $budgetCar->color". PHP_EOL."<br>";

?>