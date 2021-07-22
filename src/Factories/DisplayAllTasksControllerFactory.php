<?php


namespace App\Factories;


use App\Controllers\DisplayAllTasksController;
use Psr\Container\ContainerInterface;

class DisplayAllTasksControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $model = $container->get('TasksModel');
        $controller = new DisplayAllTasksController($model, $renderer);
        return $controller;
    }

}