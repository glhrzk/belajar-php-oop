<?php

class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $names, string $prices)
    {
        $this->name = $names;
        $this->price = $prices;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{

    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
        echo "Price $this->price" . PHP_EOL;
    }
}
