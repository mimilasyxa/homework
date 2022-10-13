<?php

use Car\Car;

class Conveyor
{
    public Car $car;
    public function setCar(Car $car)
    {
        $this->car = $car;
    }
    public function setCarModel(string $model): void
    {
        $this->car->setModel($model);
    }

    public function setCarColor(string $color): void
    {
        $this->car->setColor($color);
    }

    public function setCarPrice(float $price): void
    {
        $this->car->setPrice($price);
    }

    public function getCar(): Car
    {
        return $this->car;
    }

}