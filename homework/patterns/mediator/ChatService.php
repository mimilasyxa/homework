<?php

namespace mediator;

use Components\Button;
use Components\Window;

class ChatService
{
    public function handleEvent(string $event) // $event = 'buttonClick'
    {
        $chatMediator = new ChatMediator(new Button('le button', 'Green'), new Window('das est window', 'Magenta'));
        $chatMediator->notify($event); // Вы нажали на кнопку
    }
}