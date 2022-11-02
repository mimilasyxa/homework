<?php

namespace Components;

class Window extends Component
{
    public function change(): string
    {
        $this->setColor('dark');
        $this->setText('Неактивное окно');

        return 'Вы нажали на другое окно';
    }
}