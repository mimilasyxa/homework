<?php

use state\Context;

abstract class State
{
    protected Context $context;
    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    abstract public function publish();
    abstract public function moderate();
}