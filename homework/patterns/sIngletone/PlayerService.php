<?php

class PlayerService
{
    public function takeDamage(float $damage) // Представим что урон = 10
    {
        $player1 = Player::getInstance();
        $player2 = Player::getInstance();

        $player1->damage($damage); // игрок теряет 10 хп
        $player1->getHealth(); // 90 хп

        $player2->getHealth(); // тоже 90 хп, игрок одиночка....
    }
}

/*
 * Паттерн гарантирует что у нас будет всего один объект класса
 * 1. Один ресурс на всё, допустим у нас есть синглтон для БД => мы всегда будем делать запросы через один коннект не создавая новый
 * 2. Получаем доступ к одиночке из любой точки проекта
 */