<?php

class Square implements Figure
{
    public Color $color;
    public function getSqr(): float|int
    {
        return 10*10;
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