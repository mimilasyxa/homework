<?php

namespace mediator;

use Components\Component;

interface Mediator
{
    public function notify(string $event);
}