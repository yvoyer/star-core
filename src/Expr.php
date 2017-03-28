<?php

namespace Star;

use Star\Expressions;

final class Expr
{
    /**
     * @return Expressions\BooleanTrue
     */
    public static function BooleanTrue()
    {
        return new Expressions\BooleanTrue();
    }

    /**
     * @return Expressions\BooleanFalse
     */
    public static function BooleanFalse()
    {
        return new Expressions\BooleanFalse();
    }
}
