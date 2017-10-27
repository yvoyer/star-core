<?php

namespace Star\Expressions;

use Star\Application;
use Star\Conditional;
use Star\Conditionals\Same;
use Star\Expression;
use Star\Statement;

final class BooleanTrue implements Expression
{
    /**
     * @param Expression $expression
     *
     * @return Conditional
     */
    public function isSame(Expression $expression)
    {
        return new Same($this, $expression);
    }

    /**
     * @return string
     */
    public function toString()
    {
        return 'true';
    }

    /**
     * @param Application $application
     *
     * @return Statement
     */
    public function statement(Application $application)
    {
        throw new \RuntimeException('Method ' . __METHOD__ . ' not implemented yet.');
    }
}
