<?php

/*
====================
What is Constructor :
====================

# Every class has a Magic Method which gets called automatically
# Constructor are magic methods that gets loaded automatically when instance
of class is created.
# Purpose of constructor is to initialize the properties of the class.

===========================
Purpose of Constructor :
===========================

# Initialize the properties of class.
# Initialize the database connection.
# Check the file Exists.
# Open the file before using it with the Methods.
# Check for the internet connection
# Check API is reachable before the connection
# Load a Instance of a class.
# Load mendatory properties to execute the methods in the class.


*/
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
$student1->printDetails();