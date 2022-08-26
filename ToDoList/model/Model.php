<?php 


class Model 
{

    function __construct()
    {
        // $this->db = new SQLite3("test.db");
        $this->pdo = new PDO('sqlite:ToDoList.db');
    }

    public function returnAll()
    {
        $result = $this->pdo->query("SELECT * FROM users")->fetchAll();
        return $result;
    }

    public function userAdd($login , $password)
    {   
        $this->pdo->prepare('INSERT INTO users (login, password) VALUES (?, ?)')->execute([$login, $password]);
        if ($this->pdo->prepare("SELECT * FROM users WHERE login=?")->execute([$login])){
            return true;
        };
        // return $result;
    }

    public function userLogin($login , $password)
    {
        try {
            //? Без захисту від прямих ін'єкцій бо я можу собі дозволити
            $createdUser = $this->pdo->query("SELECT * FROM users WHERE login = '$login' AND password = '$password'")->fetchAll();
            
        } catch (Exception $e){
            return 'Eror:'.  $e->getMessage()."\n";
        };

        if (!$createdUser) {
            return false;
        };

        return($createdUser);
    }

}