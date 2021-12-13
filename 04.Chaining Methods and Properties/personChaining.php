<?php
class person{
    private $name ="";
    private $age="";

    public function setName($name = "")
    {
        $this->name = $name;
    }

    public function setAge($age = "")
    {
        $this->age = $age;
    }

    public function getInfo()
    {
        echo "Hello My name is " . $this->name . " and my age is " . $this->age;
    }
}

$person = new person();
$person->setName("Faisal");
$person->setAge("27");
$person->getInfo();