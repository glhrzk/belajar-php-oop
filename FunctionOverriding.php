<?php

require_once "data/Manager.php";

/**
 * overide function in child class, maka akan menimpa fungsi yang ada di parent class ketika object dibuat di child class
 */

$manager = new Manager();
$manager->name = "galih";
$manager->sayHello("laely");

$vp = new VicePresident();
$vp->name = "rizki";
$vp->sayHello("jesy");
