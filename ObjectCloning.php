<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "glh";
$student1->value = 100;
$student1->setSample("Object pertama");


var_dump($student1);

$student2 = clone $student1;

var_dump($student2);


// semua properti yang ada di object akan di clone, private protected dll.