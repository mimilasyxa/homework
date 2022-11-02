<?php

namespace strategy;

use CarStrategy;
use mysql_xdevapi\Exception;

class RoadmapStrategy
{
    /**
     * @param string $meanOfTraveling
     * @param array $travelingPoints
     * @return string
     */
    public function createRoad(string $meanOfTraveling, array $travelingPoints): string // Будем пешеходом
    {
        return (new Context(match($meanOfTraveling){
            'walking' => new WalkingStrategy(),
            'bus' => new BusStrategy(),
            'car' => new CarStrategy(),
            default => throw new Exception()
        }))->createRoad($travelingPoints);
    }
}
/**
 * Паттерн стратегия определяет похожую группу алгоритмов, помещает каждый в свой собственный класс и позволяет подменять их при необходимости
 * Используется если у нас есть множество вариаций одного алгоритма.
 *
 *
 *
 */