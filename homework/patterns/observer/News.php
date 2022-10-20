<?php

namespace Observer;

class News
{
    public string $text;
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}