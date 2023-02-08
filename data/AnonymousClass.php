<?php

interface HelloWorld
{
    public function sayHello(): void;
}

$helloWorld = new class implements HelloWorld
{
    public function sayHello(): void
    {
        echo "Hello world" . PHP_EOL;
    }
};

$helloWorld->sayHello();

// sama seperti di php dasar, basic dari anonymous function
// menuliskan langsung classnya dari variable


$goodBye = new class("glhrzk") implements HelloWorld
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name ini adalah anonymous class dengan construct" . PHP_EOL;
    }

    public function __destruct()
    {
        echo "object berhasil di hapus" . PHP_EOL;
    }
};

$goodBye->sayHello();


// sama halnya dengan class class lain, anonymous class bisa menggunakan constructor dan destructor