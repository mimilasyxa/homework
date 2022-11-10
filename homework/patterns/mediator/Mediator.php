<?php

namespace mediator;

interface Mediator
{
    public function notify(string $event);
}