<?php

class PcService
{
    public function createPc(string $type) // Представим что $type = Gaming
    {
        $pcFactory = match($type){
            'Gaming' => new GamingPcFactory(),
            'Home' => new HomePcFactory(),
            'Office' => new OfficePcFactory(),
            default => throw new Exception('Нет такого типа компьютера')
        };

        $pcFactory->createMonitor();
        $pcFactory->createKeyboard();
    }
}

/**
 * Создаём семейство объектов не привязываясь к конкретным классам объектов.
 * Упрощает добавление новых продуктов в код
 *
 *
 *
 */