<?php

use builder\Car;

interface Builder
{
    public function reset();
    public function setSeats(string $seats);
    public function setEngine(string $engine);
    public function setChassis(string $chassis);
    public function getResult(): Car;
}