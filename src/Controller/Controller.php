<?php

declare( strict_types=1 );

namespace Betreuteszocken\ForumApi\Controller;

abstract class Controller implements ControllerInterface
{
    /**
     * defines the GET method
     *
     * @var int
     */
    const METHOD_GET = 1;

    /**
     * defines the POST method
     *
     * @var int
     */
    const METHOD_POST = 2;

    /**
     * defines all methods
     *
     * @var int
     */
    const METHOD_ALL = 3;

    /**
     * @param string $key
     * @param int    $method
     *
     * @return mixed|null
     */
    protected function getRequestParameter(string $key, int $method = self::METHOD_ALL)
    {
        if( $method & self::METHOD_GET === self::METHOD_GET )
        {
            if( array_key_exists($key, $_GET) )
            {
                return $_GET[ $key ];
            }
        }

        if( $method & self::METHOD_POST === self::METHOD_POST )
        {
            if( array_key_exists($key, $_POST) )
            {
                return $_POST[ $key ];
            }
        }

        return null;
    }
}
