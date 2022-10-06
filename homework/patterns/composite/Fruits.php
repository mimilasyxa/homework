<?php

class Fruits implements Item
{
    public array $items;
    public function __construct(array $items)
    {
        $this->items = $items;
    }
    public function getPrice(): float|int
    {
        $sum = 0;
        foreach ($this->items as $item){
            $sum += $item->getPrice();
        }

        return $this->getPrice();
    }
}