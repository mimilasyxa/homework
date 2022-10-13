<?php

class ChocolateFlavor extends CookieDecorator
{

    public function getPrice(): int|float
    {
        return $this->cookie->getPrice() + 50;
    }

    public function getFlavor(): string
    {
        return $this->cookie->getFlavor() . ' с шоколадом';
    }
}