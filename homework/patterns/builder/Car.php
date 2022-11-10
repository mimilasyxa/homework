<?php

namespace builder;

class Car
{
    private string $engine;
    private string $chassis;
    private string $seats;

    public function setSeats(string $seat)
    {
        $this->seats = $seat;
    }

    public function setEngine(string $engine)
    {
        $this->engine = $engine;
    }

    public function setChassis(string $chassis)
    {
        $this->chassis = $chassis;
    }
}