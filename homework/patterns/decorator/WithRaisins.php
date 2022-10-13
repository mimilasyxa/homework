<?php

class WithRaisins extends CookieDecorator
{

    public function getPrice(): int|float
    {
        return $this->cookie->getPrice() + 70;
    }

    public function getFlavor(): string
    {
        return $this->getFlavor() . ' с изюмом';
    }
}