<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCornet() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCornet() . PHP_EOL;
echo $rectangle->getParentCorner() . PHP_EOL;
