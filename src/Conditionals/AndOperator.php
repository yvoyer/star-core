<?php

namespace Star\Conditionals;

use Star\Application;
use Star\Conditional;
use Star\Expression;
use Star\Procedure;

final class AndOperator implements Conditional
{
    /**
     * @var Conditional
     */
    private $left;

    /**
     * @var Conditional
     */
    private $right;

    /**
     * @param Conditional $left
     * @param Conditional $right
     */
    public function __construct(Conditional $left, Conditional $right)
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
//        $this->left->
  //      Application::execute($this)
    //        ->when(new Same($this->left->))
      //  return $this->left->evaluate()
        throw new \RuntimeException('Method ' . __METHOD__ . ' not implemented yet.');
    }
}
