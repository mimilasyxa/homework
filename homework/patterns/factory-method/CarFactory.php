<?php

class CarFactory extends Creator
{
    public function createProduct(): Product
    {
        return new Car();
    }
}