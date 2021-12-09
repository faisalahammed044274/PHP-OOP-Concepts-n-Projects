<!-- 1. Define a Student Class
2. Define Properties of Class 
    - name
    - class 
3. Define get and set methods to set and access the properties via the methods.
4. Define printDetails to print both the properties.
 -->

 <?php

class Student{

    public $name;
    public $class;


    function getName() {
        return $this->name;
    }

    function setName($name){
        $this->name = $name;
    }

    function getClass() {
        return $this->class;
    }

    function setClass($class){
        $this->class = $class;
    }

    function printDetails() {
        echo "$this->name is studying in $this->class Class." . PHP_EOL . "<br>";
    }
}

$student1 = new Student();
$student2 = new Student();
$student3 = new Student();

$student1->setName("Karim, Miah");
$student1->setClass("1st std");

$student2->setName("Rohim, Miah");
$student2->setClass("1st std");

$student3->setName("Setu , Miah");
$student3->setClass("1st std");

$student1->printDetails() . PHP_EOL;
$student2->printDetails() . PHP_EOL;
$student3->printDetails() . PHP_EOL;
