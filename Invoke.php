<?php

// invoke adalah membuat seolah olah object menjadi funtion. padahahal dia object yang di classnya memiliki function invoke, function invoke itulah yang akan dipanggil jika object digunakan sebagai function

require_once "data/Student.php";

$student1 = new Student();

$student1->id = "1";
$student1->name = "glhrzk";
$student1->value = 100;

$student1(1, "glh", "rzk", true);
