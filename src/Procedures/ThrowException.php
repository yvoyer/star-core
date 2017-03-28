<?php

namespace Star\Procedures;

use Star\Context;
use Star\Expression;
use Star\Procedure;
use Star\Statement;

final class ThrowException implements Procedure
{
    /**
     * @var Expression
     */
    private $message;

    /**
     * @param Expression|null $message
     */
    public function __construct(Expression $message = null)
    {
        $this->message = $message;
    }

    /**
     * @return Statement
     */
    public function execute()
    {
        throw new \Exception($this->message->toString());
    }

    /**
     * @param Context $context
     *
     * @return Procedure
     */
    public function withContext(Context $context)
    {
        throw new \RuntimeException('Method ' . __METHOD__ . ' not implemented yet.');
    }
}
