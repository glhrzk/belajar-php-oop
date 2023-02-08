<?php

/**
 * std class adalah kemampuan merubah array menjadi object secara otomatis
 */

$name = [
    "firstName" => "glh",
    "lastName" => "rzk"
];

$object = (object)$name;

var_dump($object);

echo "firstName : $object->firstName" . PHP_EOL;
echo "lastName : $object->lastName" . PHP_EOL;


/**
 * bisa juga mengembalikan dari object ke array
 * enak banget php bisa fleksible sana sini
 */

$toArray = (array)$object;
var_dump($toArray);
