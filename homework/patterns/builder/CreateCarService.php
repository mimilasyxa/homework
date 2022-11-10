<?php

namespace builder;

use CarBuilder;

class CreateCarService
{
    public function create()
    {
        $director = new Director(new CarBuilder());

        $normalCar = $director->createNormalCar();

        $racingCar = $director->createRacingCar();
    }
}

/**
 * Строитель даёт возможность использовать один и тот же код строительства
 * для получения разных представлений объектов.
 *
 * Строители могут отличаться друг от друга не только цветом/размером/количеством какого-то параметра но также и его наличием
 * (есть дома с бассейном а есть без)
 *
 * Без строителя нам пришлось бы строить один большой метод который бы часто имел половину параметром null или false (не у всех есть бассейн или гараж)
 *
 *
 */


