<?php

declare( strict_types=1 );

namespace Betreuteszocken\ForumApi\Controller;

interface ControllerInterface
{
    /**
     * @return int
     */
    public function execute(): int;
}
