<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'DisplayAllTasksController');
    $app->post('/', 'NewTaskController');
//
//    $app->get('/', function ($request, $response, $args) use ($container) {
//        $model = $container->get('TasksModel');
//
//        return $response;
//    });


};
