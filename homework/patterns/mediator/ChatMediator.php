<?php

namespace mediator;

use Components\Component;

class ChatMediator implements Mediator
{
    private Component $button;
    private Component $window;

    public function __construct(Component $button, Component $window)
    {
        $this->window = $window;
        $this->button = $button;
    }

    public function notify(string $event): string
    {
        if ($event == 'button1Click'){
            $this->button->setColor('red');
            $this->button->setText('Clicked');
            $this->window->setText('You clicked button!');
            return $this->button->click();
        }

        if ($event == 'window1Click'){
            $this->window->setText("Now it's not window but linux");
            $this->window->setColor('Blue');
            $this->button->setText('Now click on me!');
            return $this->window->click();
        }
    }
}

/*
 * Необходимо чтобы объекты могли общаться друг с другом но при этом не явно ссылаться (иметь слабую связь)
 * Создаём объект (проводник) который содержит в себе логику взаимодействия объектом при этом они не знают друг о друге.
 * Для переиспользования в будущем.
 *
 */