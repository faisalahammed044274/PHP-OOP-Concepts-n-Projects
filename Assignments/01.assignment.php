<?php

// 1) Create a Student Class 
// 2) Create marks as Student Properties 
// 3) Write examResults() Method of Student Class 
// 4) examResults() method accepts 3 subjects marks 
// 5) Passing Marks for each exam is 35 and Maximum Marks is 100 for each subject.

class Student{

    public $marks;
    public $subject1;
    
    function examResults($hfd){

        if ($this->marks <= 35){
            echo ("Not passed in this subject") . PHP_EOL;    
        }

        if ($this->marks >=100){
            echo  ("You are getting the highest mark in this subject") . PHP_EOL;
        }

    }

}
$subjectResult1 =new Student();
$subjectResult1->subject1 = 34;
echo $subjectResult1;


?>