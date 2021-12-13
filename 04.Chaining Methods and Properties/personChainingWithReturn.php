<?php

class person{
    private $name ="";
    private $age ="";

    public function setName($name = ""){
        $this->name = $name;
        return $this;
    }

    public function setAge($age = ""){
        $this->age = $age;
        return $this;
    }

    public function getInfo(){
        echo "My Name : " . $this->name . " and my age : " . $this->age;
    }
} 

$person = new person();
$person->setName("Faisal Ahammed");
$person->setAge("96");
$person->getInfo();