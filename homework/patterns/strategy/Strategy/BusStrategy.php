<?php

namespace strategy;

use Strategy;

class BusStrategy implements Strategy
{
    public function createRoad(array $roadPoints): string
    {
        return 'Маршрут для автобуса';
    }
}