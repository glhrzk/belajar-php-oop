<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

/**
 * alias disini dibuat untuk melengkapi kekurangan import
 */

use Data\One\Conflict as Conf1;
use Data\Two\Conflict as Conf2;
use function Helper\Helpme as Help;
use const Helper\APPLICATION as App;

$conflict1 = new Conf1();
var_dump($conflict1);

$conflict2 = new Conf2();
var_dump($conflict2);

Help();

echo App . PHP_EOL;
