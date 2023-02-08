<?php

class Person
{
    const AUTHOR = "galih rizki";
    // constant nempel di class bukan di object, jika ingin memanggilnya maka sebut nama classnya lalu constannya

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $names, string $addresss)
    {
        $this->name = $names;
        $this->address = $addresss;
    }


    function sayHello(?string $names)
    {
        if (is_null($names)) {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $names, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR " . self::AUTHOR . PHP_EOL;
        // self digunakan untuk mengambil constanst dalam class yang sama, jadi kita tidak perlu menulis kembali nama classnya
    }


    function __destruct()
    {
        echo "Object person $this->name is Destroyed";
    }
}
