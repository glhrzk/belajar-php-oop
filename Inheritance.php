<?php

/**
 * inheritance adalah turunan dari class, kelas anak bisa mengakses semua class induk.
 */

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "galih";
$manager->sayHello("joko");


$vp = new VicePresident();
$vp->name = "rizki";
$vp->sayHello("joko");
