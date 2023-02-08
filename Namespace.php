<?php

/**
 * namespace adalah wadah dari class
 * namespace bisa nested, ibarat folder, folder bisa di masukan dalam folder
 * namespace berguna ketika kita mempunyai beberapa nama class yang sama, dengan namespace nama class sama tidak akan menjadikan error di PHP
 */

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

echo Helper\APPLICATION;

Helper\Helpme();
