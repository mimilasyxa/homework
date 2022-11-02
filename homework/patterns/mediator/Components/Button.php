<?php

namespace Components;

class Button extends Component
{
    public function click(): string
    {
        $this->setText('Вы нажали на кнопку!');
        $this->setColor('red');

        return 'Нажата';
    }
}