<?php


namespace App\Controllers;


use App\Abstracts\Controller;
use App\Models\TasksModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class NewTaskController extends Controller
{
    private TasksModel $model;
    private PhpRenderer $renderer;

    public function __construct(TasksModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $task = $request->getParsedBody();
        $this->model->addTask($task['newTask']);
        return $response->withHeader('Location', '/');
    }

}