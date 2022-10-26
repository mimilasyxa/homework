<?php

namespace Components;

class Button implements Component
{
    protected string $text;
    protected string $color;

    public function __construct(string $text, string $color)
    {
        $this->text = $text;
        $this->color = $color;
    }

    public function setText(string $text): bool
    {
        $this->text = $text;

        return true;
    }

    public function setColor(string $color): bool
    {
        $this->color = $color;

        return true;
    }

    public function click(): string
    {
        return 'Вы нажали на кнопку';
    }
}