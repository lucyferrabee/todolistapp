<?php


namespace App\Factories;


use App\Controllers\NewTaskController;
use Psr\Container\ContainerInterface;

class NewTaskControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $model = $container->get('TasksModel');
        $renderer = $container->get('renderer');
        $controller = new NewTaskController($model, $renderer);
        return $controller;
    }



}