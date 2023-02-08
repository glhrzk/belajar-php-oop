<?php

namespace Data;

class Shape
{
    public function getCornet()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCornet()
    {
        return 4;
    }

    public function getParentCorner()
    {
        return parent::getCornet();
    }
}
