<?php

require_once "data/Product.php";
$product = new Product("Apple", 5000);
$dummy = new ProductDummy("Jeruk", 3500);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy->info();
