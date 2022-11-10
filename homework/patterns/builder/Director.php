<?php

namespace builder;

use Builder;

class Director
{
    private Builder $builder;
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function createNormalCar(): Car
    {
        $this->builder->reset();

        $this->builder->setChassis('обычный каркас');
        $this->builder->setEngine('обычный двигатель');
        $this->builder->setSeats('обычные сиденья');

        return $this->builder->getResult();
    }

    public function createRacingCar(): Car
    {
        $this->builder->reset();

        $this->builder->setChassis('гоночный каркас');
        $this->builder->setEngine('гоночный двигатель');
        $this->builder->setSeats('сиденья для гонок');

        return $this->builder->getResult();
    }
}