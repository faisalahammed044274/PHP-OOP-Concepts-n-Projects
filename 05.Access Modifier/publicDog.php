<?php

class Dog{
    public $color;
    public $breed;

    public function dogBark(){
        echo "Woof ! Woof !" . PHP_EOL;
    }

    public function dogSleep(){
        echo "ZZZZzzzzzz" . PHP_EOL;
    }
}

$dog1 = new Dog();

//Access the properties Directly
echo $dog1->color = "Black" . PHP_EOL;
echo $dog1->breed = "German Shepard" . PHP_EOL;

//Call Method
$dog1->dogBark();
$dog1->dogSleep();

