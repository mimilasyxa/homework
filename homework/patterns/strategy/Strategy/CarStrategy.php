<?php

class CarStrategy implements Strategy
{
    public function createRoad(array $roadPoints): string
    {
        return 'Маршрут для машины';
    }
}