<?php

/**
 * static yang ada di class (properties maupun function) sifatnya terpisah dari class tersebut
 * tanpa harus membuat object terlebih dahulu, static bisa di panggil.
 * seperti biasa memanggilnya menggunakan keyword nama class::properties/classnya
 */

require_once "helper/MathHelper.php";

use Helper\{MathHelper};

echo MathHelper::$name . PHP_EOL;

// bisa juga di overide
MathHelper::$name = "glhrzk";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(57, 56, 12, 52, 63, 90);
echo "Result : $result" . PHP_EOL;
