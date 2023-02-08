<?php

class Programmer
{
    public string $name;

    public function __construct(string $names)
    {
        $this->name = $names;
    }
}

class BackendProgrammer extends Programmer
{
}

class FrontendProgrammer extends Programmer
{
}

// penggunaannya tidak terbatas di class saja, jika digunakan di parameter method pun bisa
class Company
{
    public Programmer $programmer;
}


// type check & casts, seperti isnull di tipe data, tapi ini untuk mengecek apakah ini objek yang dituju/ditanya
function sayHElloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    }
}
