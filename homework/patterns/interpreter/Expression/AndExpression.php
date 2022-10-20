<?php

namespace Expression;

use Context\Context;

class AndExpression implements Expression
{
    protected Expression $first;
    protected Expression $second;

    public function __construct(Expression $first, Expression $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context)
            && $this->second->interpret($context);
    }
}