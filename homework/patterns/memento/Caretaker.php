<?php

namespace memento;

class Caretaker
{
    public array $mementos;
    public Originator $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backUp()
    {
        $this->mementos[] = $this->originator->save();
    }

    public function undo()
    {
        $memento = array_pop($this->mementos);

        $this->originator->restore($memento);
    }

    public function showHistory()
    {
        return $this->mementos;
    }

}