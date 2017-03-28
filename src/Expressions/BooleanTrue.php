<?php

namespace Star\Expressions;

use Star\Conditional;
use Star\Conditionals\Same;
use Star\Expression;

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
     * @param Conditional $conditional
     *
     * @return Conditional
     */
    public function andX(Conditional $conditional)
    {
        throw new \RuntimeException('Method ' . __METHOD__ . ' not implemented yet.');
    }

    /**
     * @return string
     */
    public function toString()
    {
        return 'true';
    }
}
