<?php

class Triangle implements Figure
{
    public Color $color;
    public function getSqr(): float|int
    {
        return 5*10*2;
    }

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color->getColor();
    }
}