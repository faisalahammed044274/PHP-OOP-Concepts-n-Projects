<?php
// Define and Call Constructor
class Student {

    public $name = "Faisal, Ahammmed";
    public $class = "PHP OOP Class";
    public $rollno = "ROll number is 589934";

    // if commented this method then we get the value in the result.
    function __construct() //it's a magic method
    {
        $this->name = "";
        $this->class = "";
        $this->rollno = "";
    }

    function printDetails() {
        echo "$this->name is studying in $this->class class and roll number is $this->rollno." . PHP_EOL;
    }
}
//Creation of Instance of Class
$student1 = new Student(); //This will invoke the constructor.
// $student1 -> name = "Faisal";
// $student1 -> class = "PHP OOP"; // Declare the value 
// $student1 -> rollno = "585223";
$student1->printDetails();



?>