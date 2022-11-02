<?php

namespace Entity;

use Entity;
use Visitor;

class Department implements Entity
{
    private array $workers;
    public function __construct(array $workers)
    {
        $this->workers = $workers;
    }

    /**
     * @return array
     */
    public function getWorkers(): array
    {
        return $this->workers;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitDepartment($this);
    }
}