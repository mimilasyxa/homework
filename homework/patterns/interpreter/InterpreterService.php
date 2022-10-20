<?php

use Context\Context;
use Expression\AndExpression;
use Expression\OrExpression;
use Expression\VariableExpression;

class InterpreterService
{
    public function makeWork()
    {
        $context = new Context();

        $a = new VariableExpression('A');
        $b = new VariableExpression('B');
        $c = new VariableExpression('C');

        $context->setVariable($a, true);
        $context->setVariable($b, true);
        $context->setVariable($c, false);
        // A || (B && C)
        $exp = new OrExpression($a,new AndExpression($b, $c));

        // результат от того что выше
        $exp->interpret($context);
    }
}

/*
 * Для заданного языка определяет представление его грамматики, а также интерпретатор предложений этого языка.
 *
 * Context содержит в себе данные для перевода одних переменных на "язык" других, в нашем случае A = true, B = true, C = false
 * Описываем выражение Or/And передавая туда наши переменные но используя их значения на другом "языке".
 * Интерпретируем используя контекст
 *
 *
 *
 */