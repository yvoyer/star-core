<?php

namespace Star;

interface Statement
{
    /**
     * @param Expression $expression
     *
     * @return Statement
     */
    public function isSame(Expression $expression);

    /**
     * @param Conditional $conditional
     *
     * @return Statement
     */
    public function andX(Conditional $conditional);
}
