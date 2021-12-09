<?php

// Class Car {
//     public $name;
//     function sayHello() {
//         echo "Hello from car Class". PHP_EOL;
//     }
// }

// $car1 = new Car();
// $car1->name="Ferrari";
// $car1->sayHello();


class Car{
    public $name;
    public $color;

    function sayHello() {
        echo "<h2>Hello from Car Class.</h2>" . PHP_EOL;
    }
}

    $car2 = new Car();
    $car2->name = "Ferrari";
    $car2->color = "Red";
    $car2->sayHello();
    echo "<br>";
    echo "$car2->name is $car2->color Color Car." . PHP_EOL . "<br>";

    $car3 = new Car();
    $car3->name = "BMW";
    $car3->color = "Blue";
    echo "$car3->name is $car2->color Color Car." . PHP_EOL . "<br>";

    $car4 = new Car();
    $car4->name = "Rolls Royce";
    $car4->color = "Black";
    echo "$car4->name is $car2->color Color Car." . PHP_EOL . "<br>";
?>