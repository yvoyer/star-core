<?php

namespace Star;

interface Conditional
{
    /**
     * @param Procedure $procedure
     *
     * @return Expression
     */
    public function evaluate(Procedure $procedure);
}
