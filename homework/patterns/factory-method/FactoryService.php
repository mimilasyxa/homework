<?php

class FactoryService
{
    public function workWithCar(): string
    {
        $carFactory = new CarFactory();

        return $this->driveProduct($carFactory);
    }

    public function driveProduct(Creator $creator): string
    {
        return $creator->makeProductWork();
    }
}

/**
 * Основной смысл - мы можем подменять фабрики на ходу и из-за того что при создании объекта мы должны возвращать один и тот же интерфейс мы можем
 * возвращать объект с этим интерфейсом.
 * Главное что у объектов одинаковый интерфейс (а значит и методы) следовательно мы можем их безболезненно заменять, нам важно только то что у них одинаковые методы
 * Основной минус - для каждого класса придётся создавать свой класс "создатель"
 *
 */