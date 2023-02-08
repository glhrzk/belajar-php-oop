<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "glh";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "glh";
$student2->value = 100;

var_dump($student1 == $student2);
// equavalent, nilainya saja yang sama. | nilai true

var_dump($student1 === $student2);
// identik, nilainya saja yang sama tetapi address memory yang berbeda | nilai false