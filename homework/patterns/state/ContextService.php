<?php

namespace state;

class ContextService
{
    public function changeContext()
    {
        $context = new Context(new Created());
        $context->publish(); // "Нельзя запостить без модерации"
        $context->moderate(); // Состояние изменилось на Moderated

        $context->moderate(); // "Пост уже прошёл модерацию"
        $context->publish(); // Состояние изменилось на Publish

        $context->moderate(); // "Пост уже прошёл модерацию"
        $context->publish(); // "Пост уже опубликован"
    }
}

/**
 * Позволяем объекту изменить поведения в зависимости от его состояния.
 * Чтобы не прибегать к миллиону if'ов или switch case'ов и хранить все состояния внутри одного классы
 * мы будем хранить текущее состояние и изменять его.
 * Позволит нам изменить поведение объекта не переписывая кучу кода, а добавив новый класс
 *
 *
 */