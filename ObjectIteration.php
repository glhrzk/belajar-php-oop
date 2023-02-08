<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";


    // dibuat manual dengan implement interface interatorAggregate
    // public function getIterator(): Traversable // masih gak tau kenapa harus pakai return traversable
    // {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "forth" => $this->forth,
    //     ];
    //     return new ArrayIterator($array);
    // }

    // menggunakan yield
    public function getIterator(): Traversable
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    }
}


$data = new Data();

// otomatis
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
