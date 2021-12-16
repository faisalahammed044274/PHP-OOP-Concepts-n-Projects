<?php

//Multiple Inheritance cannot possible in PHP. 

 class University{
     public $universityName = "Dhaka University of Engineering and Technology (DUET)";
     function  helloUniversity(){
         echo "Hello from $this->universityName" . PHP_EOL;
     }

    }


 class Teacher extends University{
    public $teacherName = "rasel";
    function helloTeacher(){
        echo "Hello from private teacher $this->teacherName " . PHP_EOL;
    }
 }

 $teacher1 = new Teacher();
 $teacher1->helloTeacher();
 $teacher1->helloUniversity();

 echo $teacher1->teacherName .PHP_EOL;
 echo $teacher1->universityName . PHP_EOL;
?>