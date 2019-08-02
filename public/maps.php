<?php

use Betreuteszocken\ForumApi\Controller\ForumMapController;

// load composer dependencies
include_once __DIR__ . '/../vendor/autoload.php';

// load env settings
Dotenv\Dotenv::create(__DIR__ . '/..')->load();

// run controller
$controller = new ForumMapController();

if( $controller->execute() !== 0 )
{
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(
        array("message" => "An error occurred.")
    );
}
