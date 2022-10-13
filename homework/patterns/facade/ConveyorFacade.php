<?php

use Car\Car;

class ConveyorFacade
{
    protected Conveyor $conveyor;
    public function __construct(Conveyor $conveyor)
    {
        $this->conveyor = $conveyor;
    }

    public function modifyCar(string $color, string $model, float $price): Car
    {
        $this->conveyor->setCarModel($model);
        $this->conveyor->setCarColor($color);
        $this->conveyor->setCarPrice($price);

        return $this->conveyor->getCar();
    }

    public function match(int $number): Car
    {
        return match($number){
            1 => $this->modifyCar('red', 'Tesla', 50000),
            2 => $this->modifyCar('blue', 'BMW', 100000),
            3 => $this->modifyCar('green', 'Ferrari', 1000000),
        };
    }

    public function createCar(int $number): Car
    {
        $this->conveyor->setCar(new Car());
        return $this->match($number);
    }
}