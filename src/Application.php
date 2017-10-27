<?php

namespace Star;

use Star\Contexts\Argument;

final class Application
{
    /**
     * @var Procedure
     */
    private $procedure;

    /**
     * @param Procedure $procedure
     */
    private function __construct(Procedure $procedure)
    {
        $this->procedure = $procedure;
    }

    /**
     * @param Expression $expression
     *
     * @return Statement
     */
    public function when(Expression $expression)
    {
        return $expression->statement($this);
    }

    /**
     * @param Expression $expression
     *
     * @return Application
     */
    public function with(Expression $expression)
    {
        $this->procedure = $this->procedure->withContext(new Argument($expression));

        return $this;
    }

    /**
     * @param Procedure $procedure
     *
     * @return Application
     */
    public static function execute(Procedure $procedure)
    {
        return new self($procedure);
    }
}
