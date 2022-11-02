<?php

namespace strategy;

use Strategy;

class WalkingStrategy implements Strategy
{
    public function createRoad(array $roadPoints): string
    {
        return 'Маршрут для пешехода';
    }
}