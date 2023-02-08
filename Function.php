<?php

require_once "data/Person.php";

$glh = new Person("glh", "rajeg");
$glh->country = "ID";
var_dump($glh);

$glh->sayHello("");

$ly = new Person("ly", "rajeg");
$ly->country = "ID";
var_dump($ly);

$ly->sayHello(null);

$glh->info();
$ly->info();
