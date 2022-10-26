<?php

namespace memento;

class Originator
{
    public string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function doSomething()
    {
        $this->state = str_shuffle('abcdefghjkkaeoqwfka[ojf[');
    }

    public function save()
    {
        return new ConcreteMemento($this->state);
    }

    public function restore(ConcreteMemento $memento)
    {
        $this->state = $memento->getState();
    }

}