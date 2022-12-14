<?php

class ErrorTracker
{

    public function reportError()
    {
        $notifier = new LowNotifier(new MiddleNotifier(new HighNotifier));

        $notifier->notifyManager('We got problem', 3);
    }

}


/*
 * Создаём цепочку из объектов передаём первому какое-то сообщение или событие и
 * используя логику внутри понимаем может ли мы что-то сделать в этой ситуации, если можем то делаем, но также передаём
 * это сообщение или событие следующему обработчику (необязательно, можно на этом этапе выбить ошибку и свернуться)
 * и так пока не пройдём все.
 *
 * Когда имеется более одного объекта, который может обработать определенный запрос
 * Когда надо передать запрос на выполнение одному из нескольких объект, точно не определяя, какому именно объекту
 * Когда набор объектов задается динамически
 *
 */