<?php

namespace Star;

interface Procedure
{
    /**
     * @return Statement
     */
    public function execute();

    /**
     * @param Context $context
     *
     * @return Procedure
     */
    public function withContext(Context $context);
}
