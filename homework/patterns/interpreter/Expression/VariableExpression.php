<?php

namespace Expression;

use Context\Context;

class VariableExpression implements Expression
{
    protected string $name;

    public function  __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @throws \Exception
     */
    public function interpret(Context $context): bool
    {
        return $context->search($this->getName());
    }

    public function getName(): string
    {
        return $this->name;
    }
}