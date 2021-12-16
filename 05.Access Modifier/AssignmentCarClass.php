<?php

// Assignments: Create Car Class with Access Modifiers
// 1) Define Properties as private
// 2) Define Getter and Setter Methods
// 3) Define public methods like increaseSpeed and DecreaseSpeed

class Car
{
    private $speed;

    public function increaseSpeed($speedLimit)
    {
        $this->speed = $this->speed + $speedLimit;
        if ($speedLimit >= 60) {
            echo "Speed Increased and speed is $speedLimit" . PHP_EOL;
        }
    }

    public function decreaseSpeed($speedLimit)
    {
        $this->speed = $this->speed - $speedLimit;
        if ($speedLimit <= 60) {
            echo "Speed Decreased and speed is $speedLimit" . PHP_EOL;
        }
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
}

$myCar1 = new Car();
$myCar1->setSpeed(77);
echo "Starting Speed : " . $myCar1->getSpeed() . PHP_EOL;
$myCar1->increaseSpeed(96);
$myCar1->decreaseSpeed(45);
