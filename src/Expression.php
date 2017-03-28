<?php

namespace Star;

interface Expression
{
    /**
     * @param Expression $expression
     *
     * @return Conditional
     */
    public function isSame(Expression $expression);

    /**
     * @param Conditional $conditional
     *
     * @return Conditional
     */
    public function andX(Conditional $conditional);

    /**
     * @param Conditional $conditional
     *
     * @return Conditional
     */
//    public function orX(Conditional $conditional);

    /**
     * @return string
     */
    public function toString();
}
