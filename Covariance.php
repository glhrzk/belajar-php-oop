<?php

// Covariance adalah kemampuan mengubah return value dengan lebih spesifik antara class Child dengan class Parent.
// karena pada biasanya class child tidak bisa mengubah function return yang ada pada class Parent

// masih bingung anjir

require_once "data/AnimalShelter.php";

use Data\{Animal, AnimalFood, Cat, Dog, Food};
use Data\{AnimalShelter, CatShelter, DogShelter};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("mengsky");
$cat->eat(new AnimalFood);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Food);
