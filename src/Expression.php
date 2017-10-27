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
     * @param Application $application
     *
     * @return Statement
     */
    public function statement(Application $application);

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
