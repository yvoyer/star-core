<?php

namespace Star\Statements;

use Star\Expression;
use Star\Statement;

final class IsSame implements Statement
{
    /**
     * @param Expression $expression
     *
     * @return Statement
     */
    public function isSame(Expression $expression)
    {
        throw new \RuntimeException('Method ' . __METHOD__ . ' not implemented yet.');
    }
}
