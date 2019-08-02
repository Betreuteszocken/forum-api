<?php

declare( strict_types=1 );

namespace Betreuteszocken\ForumApi\Controller;

use Betreuteszocken\ForumApi\Service\MapService;

class ForumMapController extends Controller
{
    /**
     * {@inheritDoc}
     */
    public function execute(): int
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");

        $days = (int) ( $this->getRequestParameter('days') ?? getenv('DEFAULT_DAYS_ACTIVE_USER') );

        echo json_encode($this->getJsonMaps($days)) . PHP_EOL;

        return 0;
    }

    /**
     * @param int $days
     *
     * @return array
     */
    protected function getJsonMaps(int $days): array
    {
        $service = new MapService();

        return $service->getMaps($days);
    }
}
