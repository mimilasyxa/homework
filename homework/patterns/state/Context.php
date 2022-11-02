<?php

namespace state;

use State;

class Context
{
    private State $state;
    public function __construct(State $state)
    {
        $this->changeTo($state);
    }

    public function changeTo(State $state)
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function publish()
    {
        return $this->state->publish();
    }

    public function moderate()
    {
        return $this->state->moderate();
    }
}