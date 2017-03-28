<?php

namespace Star;

interface Statement
{
    /**
     * @param Procedure $procedure
     *
     * @return Expression
     */
    public function then(Procedure $procedure);
}
