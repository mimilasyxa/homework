<?php

namespace strategy;

use Strategy;

class Context
{
    private Strategy $strategy;

    public function __construct(Strategy $strategy = new WalkingStrategy())
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function createRoad(array $points): string
    {
        return $this->strategy->createRoad($points);
    }

}