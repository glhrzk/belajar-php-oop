<?php

namespace Data\Traits;

trait sayHello
{
    public function hello(?string $name): void
    {
        $result = (is_null($name)) ? "Hello\n" : "Hello $name\n";
        echo $result;
    }
}

trait sayGoodBye
{
    public function goodBye(?string $name): void
    {
        // lebih singkatnya
        echo (is_null($name)) ? "Good bye\n" : "Good bye $name\n";
    }
}

trait hasName
{
    public string $name;
}

trait canRun
{
    public abstract function run(): void;
}

trait All
{
    use sayHello, sayGoodBye, hasName, canRun;
    /**
     * properties / fungsi di trait bisa di overide
     */
}

class ParentPerson
{

    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . \PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . \PHP_EOL;
    }
}

class Person extends ParentPerson
{
    use All;
    public function run(): void
    {
        echo "Person $this->name is running" . \PHP_EOL;
    }
}
