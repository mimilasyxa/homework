<?php

class SimpleCookie implements Cookie
{
    public function getPrice(): int|float
    {
        return 500;
    }

    public function getFlavor(): string
    {
        return 'Безвкусное печенье';
    }
}