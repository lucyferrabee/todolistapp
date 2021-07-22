<?php


namespace App\Factories;


use App\Models\TasksModel;

class TasksModelFactory
{
    public function __invoke($container)
    {
        $db = $container->get('db');
        $model = new TasksModel($db);
        return $model;
    }
}