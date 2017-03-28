<?php

namespace Star\Expressions;

use Star\Conditional;
use Star\Conditionals\AndOperator;
use Star\Conditionals\Same;
use Star\Expression;

final class StarString implements Expression
{
    /**
     * @var string
     */
    private $string;

    /**
     * @param string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * @param Expression $expression
     *
     * @return Conditional
     */
    public function isSame(Expression $expression)
    {
        return new AndOperator(new Same($this, $expression), new Same(new BooleanTrue(), $this->isEquals($expression)));
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
     * @param Expression $expression
     *
     * @return Expression
     */
    private function isEquals(Expression $expression)
    {
        return $this->toString() === $expression->toString() ? new BooleanTrue() : new BooleanFalse();
    }

    /**
     * @return string
     */
    public function toString()
    {
        return $this->string;
    }
}
