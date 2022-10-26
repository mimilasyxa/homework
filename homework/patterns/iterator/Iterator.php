<?php

namespace iterator;

class Iterator
{
    /** @var array */
    public array $collection;
    public int $index;
    public function __construct(array $collection)
    {
        $this->index = 0;
        $this->collection = $collection;
    }

    public function next()
    {
        $next = $this->collection[$this->index];
        $this->index++;

        return $next;
    }
    public function hasNext(): bool
    {
        return ($this->collection < $this->index);
    }
}