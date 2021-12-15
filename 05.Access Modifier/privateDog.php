<?php

class Dog
{
    private $color;
    private $breed;

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getBreed(): string
    {
        return $this->Breed;
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
        $this->dogSleep();
    }

    public function dogBark()
    {
        echo "Woof! Woof!" . PHP_EOL;
    }

    public function dogSleep()
    {
        echo "ZZZZzzzzzz...." . PHP_EOL;
    }
}
$dog1 = new Dog();

//Access the Properties Directly
echo $dog1->setColor("Black");
echo $dog1->setBreed("German Shepard");

//Call Methods
$dog1->dogBark();
// $dog1->dogSleep();
