<?php


namespace App\Models;


class TasksModel
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getAllTasks()
    {
        $query = $this->db->prepare('SELECT task FROM tasks');
        $query->execute();
        return $query->fetchAll();
    }

    public function addTask(string $task): bool
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`task`,`completed`)
                VALUES (:task, '0')');
        $query->execute([':task' => $task]);
        return $query;
    }
}