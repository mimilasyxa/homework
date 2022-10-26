<?php

namespace Components;

class Window implements Component
{
    protected string $text;
    protected string $color;
    protected string $type;

    public function __construct(string $text, string $color)
    {
        $this->type = 'Window';
        $this->text = $text;
        $this->color = $color;
    }

    public function getComponent(): Component
    {
        return $this;
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

    public function getType(): string
    {
        return $this->type;
    }

    public function click(): string
    {
        return 'You clicked window!';
    }
}