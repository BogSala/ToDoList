<?php

class TaskList{

    function __construct()
    {
        $this->pdo = new PDO('sqlite:C:\xampp\htdocs\projects\ToDoList\storage\ToDoList.db');
    }

    // public function newRequest($type , $id, $task)
    // {
    //     switch ($type) {
    //         case 'add':
    //             return $this->add($id , $task);
    //         case 'delete':
    //             return $this->delete($id , $task);
    //         case 'get':
    //             return $this->get($id);
    //     }
    // }

    public function add($id , $task)
    {
        $this->pdo->prepare('INSERT INTO tasks (user_id, task) VALUES (?, ?)')->execute([$id, $task]);
        $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE  id = (SELECT MAX(id) FROM tasks WHERE task = :task)");
        $stmt->execute([':task'=>$task]);
        return $stmt->fetchall();
    }

    public function get($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE  user_id = :id");
        $stmt->execute([':id'=>$id]);
        return $stmt->fetchall();
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM tasks WHERE  id = :id");
        $stmt->execute([':id'=>$id]);
        return 'deleting complete';
    }
}