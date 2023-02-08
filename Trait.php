<?php

// trait itu kaya kita bikin folder fungsi, nah ketika kita ingin menambahkannya di class tinggal panggil di dalam classnya, dengan kata kunci use
// berbeda dengan interface atau abstrack class, kita harus menambahkannya di header class tersebut.

/**
 * di trait pun kita bisa menambahkan propertie
 * kalau interface dan abstract hanya bisa membuat kontrak tidak bisa menambahkan properties
 * di dalam trait pun kita bisa membuat abstract function (dan wajib di overide)
 * 
 * trait juga bisa mengoveride visibility (private, protected, public)
 */

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, sayGoodBye, sayHello};

$person = new Person();
$person->goodBye("laely");
$person->hello("jesy");
$person->name = "galih rizki";
var_dump($person);
$person->run();
