<?php

namespace Star\Conditionals;

use Star\Conditional;
use Star\Expression;
use Star\Procedure;

final class Same implements Conditional
{
    /**
     * @var Expression
     */
    private $left;

    /**
     * @var Expression
     */
    private $right;

    /**
     * @param Expression $left
     * @param Expression $right
     */
    public function __construct(Expression $left, Expression $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * @param Procedure $procedure
     *
     * @return Expression
     */
    public function evaluate(Procedure $procedure)
    {
        if ($this->left instanceof $this->right) {
            $procedure->execute();
        }
    }
}
