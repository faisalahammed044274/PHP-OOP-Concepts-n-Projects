<?php

class Student
{

    public $name;
    public $class;
    public $age;


    public function __construct($name ="", $class="", $age=""){
        $this->name = $name;
        $this->class = $class;
        $this->age = $age;
    }


    public function printDetails()
    {
        echo "$this->name is studying in $this->class class and he is $this->age years old." . PHP_EOL;
    }
}
// way 1 
$student1 = new Student();
$student1->name = "Jhon, Smith";
$student1->class = "1st";
$student1->age = "22";
$student1->printDetails();
echo "<br>";
//way 2 and recommanded
$student = new Student("Faisal", "1st year", "25");
$student->printDetails();
