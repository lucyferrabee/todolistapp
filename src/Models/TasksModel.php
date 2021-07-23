<?php


namespace App\Models;


class TasksModel
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getAllTasks(): array
    {
        $query = $this->db->prepare('SELECT `task` FROM `tasks`');
        $query->execute();
        return $query->fetchAll();
    }

    public function addTask($task)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`task`)
                VALUES (:task)');
        $query->execute([':task' => $task]);
        return $query;
    }
};
