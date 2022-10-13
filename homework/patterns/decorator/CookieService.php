<?php

class CookieService
{
    function bakeCookies()
    {
        $simpleCookie = new SimpleCookie();
        $simpleCookie->getFlavor(); // безвкусное печенье
        $simpleCookie->getPrice(); // 500

        $chocolateCookie = new ChocolateFlavor($simpleCookie);
        $chocolateCookie->getFlavor(); // Безвкусное печенье с шоколадом
        $chocolateCookie->getPrice(); // 550

        $cookieWithRaisins = new WithRaisins(new SimpleCookie());
        $cookieWithRaisins->getFlavor(); // Безвкусное печенье с изюмом
        $cookieWithRaisins->getPrice(); // 570

        $chocolateCookieWithRaising = new WithRaisins(new ChocolateFlavor(new SimpleCookie()));
        $chocolateCookieWithRaising->getFlavor(); // Безвкусное печенье с шоколадом с изюмом
        $chocolateCookieWithRaising->getPrice(); // 620
    }
}

/*  Паттерн Декоратора — это шаблон проектирования,
    который позволяет добавлять поведение экземпляру
    класса, не влияя на поведение других экземпляров
    того же класса. Причем может это делать динамически.
    Паттерн «Декоратор» позволяет динамически добавлять объекту новые обязанности,
    не прибегая при этом к порождению классов. При этом, работа с подобной структурой
    является более удобной и гибкой, нежели со множеством классов. Для этого, ссылка на
    декорируемый объект помещается в другой класс, называемый «Декоратором». Причем, и
    декоратор и декорируемый объект реализуют один и тот-же интерфейс, что позволяет
    вкладывать несколько декораторов друг в друга, добавляя тем самым декорируемому объекту
    любое число новых обязанностей. Декоратор переадресует внешние вызовы декорируему объекту
    сопровождая их наложением дополнительных обязанностей.
*/