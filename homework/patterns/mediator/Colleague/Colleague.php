<?php

abstract class Colleague
{
    private Mediator $mediator;
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function send(string $message)
    {
        $this->mediator->send($message, $this);
    }

    abstract public function notify(string $message);
}