<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

/**
 * jika kita menggunakan import, kita tidak perlu menyebutkan nama namespace saat membuat object
 * pada hakikatnya namespace dibuat seperti folder agar tidak bentrok saat membuat class dengan nama yang sama
 * jika kita menggunakan import kita tidak bisa mengimport nama class yang sama (ini kekurangannya).
 */

use Data\One\Conflict;
use function Helper\Helpme;
use const Helper\APPLICATION;

$conflict1 = new Conflict();

var_dump($conflict1);

Helpme();

echo APPLICATION . PHP_EOL;
