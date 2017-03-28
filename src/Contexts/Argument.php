<?php

namespace Star\Contexts;

use Star\Context;
use Star\Expression;

final class Argument implements Context
{
    /**
     * @var Expression
     */
    private $expression;

    /**
     * @param Expression $expression
     */
    public function __construct(Expression $expression)
    {
        $this->expression = $expression;
    }
}
