<?php

namespace template;

class BuilderService
{
    public function createCar()
    {
        $bmwBuilder = new BmwBuilder();
        $bmwBuilder->build();

        $teslaBuilder = new TeslaBuilder();
        $teslaBuilder->build();
    }
}

/*
 * Создаём суперкласс в котором описываем алгоритм (шаблон) и расписываем методы из шаблона в подклассах.
 *
 *
 *
 */