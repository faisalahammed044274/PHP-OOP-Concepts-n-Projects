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
    }

    public function decreaseSpeed($speedLimit){
        $this->speed = $this->speed - $speedLimit;
    }
    /**
     * Get the value of speed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
}

$mycar1 = new Car();
echo $mycar1 = $this->getSpeed() . PHP_EOL;
$mycar1 = $this->increaseSpeed();
echo $mycar = $this->getSpeed() . PHP_EOL;
$mycar1 = $this->decreaseSpeed();
echo $mycar = $this->getSpeed();

