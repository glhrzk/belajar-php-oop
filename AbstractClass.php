<?php

require_once "data/Location.php";

use Data\{City, Country, Location};

// abstract class, adalah kontrak atau memaksa bahwa harus menggunakan class turunannya.

$location = new City();
$location->name = "rajeg";
var_dump($location);
