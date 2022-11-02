<?php

namespace mediator;

use Components\Button;
use Components\Component;
use Components\Window;

class ChatMediator implements Mediator
{
    private Button $button;
    private Window $window;

    public function __construct(Button $button, Window $window)
    {
        $this->window = $window;
        $this->window->setMediator($this);
        $this->button = $button;
        $this->button->setMediator($this);
    }

    public function notify(string $event): string
    {
        if ($event == 'button1Click'){
            return $this->button->click();
        }

        if ($event == 'window1Click'){
            return $this->window->change();
        }
    }
}

/*
 * Необходимо чтобы объекты могли общаться друг с другом но при этом не явно ссылаться (иметь слабую связь)
 * Создаём объект (проводник) который содержит в себе логику взаимодействия объектом при этом они не знают друг о друге.
 * Для переиспользования в будущем.
 *
 */