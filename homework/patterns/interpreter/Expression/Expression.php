<?php

namespace Expression;

use Context\Context;

interface Expression
{
    public function interpret(Context $context): bool;
}