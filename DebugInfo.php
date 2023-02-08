<?php

// invoke adalah membuat seolah olah object menjadi funtion.

require_once "data/Student.php";

$student1 = new Student();

$student1->id = "1";
$student1->name = "glhrzk";
$student1->value = 100;
$student1->setSample("full Version");

var_dump($student1);
