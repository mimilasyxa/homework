<?php

namespace Components;

use mediator\Mediator;

class Component
{
    protected string $text;
    protected string $color;
    protected ?Mediator $mediator;
    public function __construct(string $text, string $color, Mediator $mediator = null)
    {
        $this->text = $text;
        $this->color = $color;
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
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
}