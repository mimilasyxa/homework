<?php

namespace memento;

class ConcreteMemento implements Memento
{
    private string $state;
    private string $date;
    public function __construct(string $state)
    {
        $this->date = date("Y-m-d H:i:s");
        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}