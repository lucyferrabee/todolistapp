<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/test', function ($request, $response, $args) use ($container) {
        $renderer = $container->get('renderer');
        return $renderer->render($response, "taskshomepage.php", $args);
    });

    $app->get('/', function ($request, $response, $args) use ($container) {
        $model = $container->get('TasksModel');

        return $response;
    });


};
