<?php

namespace Observer;

class User
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}