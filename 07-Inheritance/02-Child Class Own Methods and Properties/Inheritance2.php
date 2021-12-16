<?php

declare(strict_type = 1);

require_once "University.php";
require_once "Teacher.php";

$university = new University("Boston University", "Europe", "lno74378u37");

$teacher1 = new Teacher("Hasin Hyder","47", "WordPress", $university );
$teacher2 = new Teacher("Intiaz Ahmed", "40", "Laravel", $university );

$teacher1->printTeacherDetails();
$teacher1->printUniversityDetails();
echo "--------------------------------------" . PHP_EOL;
$teacher2->printTeacherDetails();
$teacher2->printUniversityDetails();



?>