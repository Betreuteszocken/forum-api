<?php

declare( strict_types=1 );

namespace Betreuteszocken\ForumApi\Service;

use PDO;

/**
 * Class AbstractDatabaseService
 */
abstract class AbstractDatabaseService
{

    /**
     * @var PDO
     */
    private $connection = null;

    /**
     * @return PDO
     */
    protected function getConnection(): PDO
    {
        if( is_null($this->connection) )
        {
            $this->connection = new PDO(sprintf("mysql:host=%s;dbname=%s", getenv('DB_HOST'), getenv('DB_NAME')), getenv('DB_USER'), getenv('DB_PASS'));
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->connection;
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        if( !is_null($this->connection) )
        {
            $this->connection = null;
        }
    }
}
