<?php

namespace Context;

use Expression\VariableExpression;

class Context
{
    private array $variableArray;

    /**
     * @throws \Exception
     */
    public function search(string $name): bool
    {
        if (key_exists($name, $this->variableArray)) {
            return $this->variableArray[$name];
        }

        throw new \Exception();
    }

    public function setVariable(VariableExpression $variable, $val): void
    {
        $this->variableArray[$variable->getName()] = $val;
    }
}