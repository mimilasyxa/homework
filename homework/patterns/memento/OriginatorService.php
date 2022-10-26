<?php

namespace memento;

class OriginatorService
{
    public function work()
    {
        $originator = new Originator('some random stuff');
        $careTaker = new Caretaker($originator);

        $careTaker->backUp(); // Сохраняем текущий state
        $originator->doSomething(); // Меняем state

        $careTaker->backUp();// Ещё раз сохраняем
        $originator->doSomething();// ещё раз меняем

        $careTaker->undo(); // Возвращаемся на один стейт назад
        $careTaker->undo(); // ещё раз

    }
}

/*
 * Сохраняем состояния объекта и возвращаем их при надобности
 *
 *
 */