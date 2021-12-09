<?php
class Student {

    public $name = "Jhon, Smith";
    public $class = "1st Std";

    // if commented this method then we get the value in the result.
    function __construct() //it's a magic method
    {
        $this->name = "";
        $this->class = "";
    }

    function printDetails() {
        echo "$this->name is studying in $this->class class." . PHP_EOL;
    }
}
//Creation of Instance of Class
$student1 = new Student(); //This will invoke the constructor.
$student1->printDetails();