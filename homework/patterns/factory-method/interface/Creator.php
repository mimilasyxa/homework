<?php

abstract class Creator
{
    abstract public function createProduct(): Product;
    public function makeProductWork(): string
    {
        $product = $this->createProduct();
        return $product->drive();
    }
}