<?php

// Calculate the Employee Salary

class Employee {

    public $id;
    public $name;
    public $workingHourPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function getSalaryAmount($totalDays) : int{
        // $this is a special variable which can be used to
        // access class properties.
        $this->workingDays = $totalDays - $this->totalLeaveTaken;

        $salary = $this->workingDays * $this->workingHourPerDay * $this->hourlyRate;
        return $salary;
    }
}

$employee1 = new Employee();
// $employee1->id = 101;
$employee1->name = "Jhon Smith";
$employee1->totalLeaveTaken = 4 ;
$salary = $employee1->getSalaryAmount(20);
echo "$employee1->name has worked for $employee1->workingDays and taken $employee1->totalLeaveTaken leaves." . PHP_EOL;
echo "$employee1->name salary is $salary" . PHP_EOL;

echo "<br>";

$employee2 = new Employee();
$employee2->id = 102;
$employee2->name = "Setu Faisal";
$employee2->totalLeaveTaken = 2;
$salary = $employee2->getSalaryAmount(20);
echo "$employee2->name has worked for $employee2->workingDays and taken $employee2->totalLeaveTaken leaves." . PHP_EOL;
echo "$employee2->name salary is $salary" . PHP_EOL;
