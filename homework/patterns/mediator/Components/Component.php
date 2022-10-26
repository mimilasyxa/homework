<?php

namespace Components;

interface Component
{
    public function setText(string $text): bool;
    public function setColor(string $color): bool;
    public function click(): string;
}