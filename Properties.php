<?php

require_once "data/Person.php";

$person1 = new Person();
$person1->name = "glh";
$person1->address = "rajeg";
$person1->country = "indonesia";


var_dump($person1);

$person2 = new Person();
$person2->name = "bruno";
$person2->address = "ciomas";
$person2->country = "united states";
var_dump($person2);
