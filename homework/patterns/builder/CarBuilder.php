<?php

use builder\Car;

class CarBuilder implements Builder
{
    private Car $car;
    public function reset()
    {
        $this->car = new Car();
    }

    public function setSeats(string $seats)
    {
        $this->car->setSeats($seats);
    }

    public function setEngine(string $engine)
    {
        $this->car->setEngine($engine);
    }

    public function setChassis(string $chassis)
    {
        $this->car->setChassis($chassis);
    }

    public function getResult(): Car
    {
        return $this->car;
    }
}