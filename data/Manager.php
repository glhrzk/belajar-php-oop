<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $names = "", string $titles = "manager")
    {
        $this->name = $names;
        $this->title = $titles;
    }

    function sayHello(string $names)
    {
        echo "Hi $names, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{

    public function __construct(string $names = "")
    {
        parent::__construct($names, "VP");
    }

    function sayHello(string $names)
    {
        echo "Hi $names, my name is VP $this->name" . PHP_EOL;
    }
}
