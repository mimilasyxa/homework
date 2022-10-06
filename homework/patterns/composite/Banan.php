<?php

class Banan implements Item
{
    public float $price;
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float|int
    {
        return $this->price;
    }
}