<?php

namespace Star\Statements;

use Star\Expression;
use Star\Procedure;
use Star\Statement;

final class IsSame implements Statement
{
    /**
     * @param Procedure $procedure
     *
     * @return Expression
     */
    public function then(Procedure $procedure)
    {
        throw new \RuntimeException('Method ' . __METHOD__ . ' not implemented yet.');
    }
}
