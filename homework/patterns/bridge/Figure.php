<?php

interface Figure
{
    public function __construct(Color $color);
    public function getColor(): string;
    public function getSqr(): float|int;
}