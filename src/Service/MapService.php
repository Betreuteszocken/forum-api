<?php

declare( strict_types=1 );

namespace Betreuteszocken\ForumApi\Service;

use Betreuteszocken\ForumApi\Model\Map;
use PDO;

/**
 * Class MapService
 */
class MapService extends AbstractDatabaseService
{
    /**
     * @param int $days
     *
     * @return Map[]
     */
    public function getMaps(int $days): array
    {
        $this->getConnection();

        $statement = $this->getConnection()->prepare(sprintf('
            SELECT
                      %s          AS `name`
                    , COUNT(%1$s) AS `count`
                    -- ,DATE_ADD(DATE(FROM_UNIXTIME(`wcf1_user`.`lastActivityTime`)), INTERVAL 5 DAY) AS `last_active`
                    -- ,DATE(NOW()) AS `now`
                    -- `wcf1_user`.*
            FROM
                    wcf1_user_option_value
            INNER JOIN
                    wcf1_user
                ON
                    wcf1_user.userID = wcf1_user_option_value.userID
            WHERE
                    DATE_ADD(DATE(FROM_UNIXTIME(wcf1_user.lastActivityTime)), INTERVAL :days DAY) >= DATE(NOW())
            GROUP BY
                    %1$s
            ORDER BY
                    `count` DESC,
                    `name` ASC
        ;', getenv('DB_COLUMN_NAME')));

        $statement->execute([':days' => $days]);
        $statement->setFetchMode(PDO::FETCH_CLASS, Map::class);

        return array_filter($statement->fetchAll(), function (Map $_map) { return !empty($_map->getName()); });
    }
}
