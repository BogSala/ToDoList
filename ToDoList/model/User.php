<?php 


class User
{


    function __construct()
    {
        $this->pdo = new PDO('sqlite:C:\xampp\htdocs\projects\ToDoList\storage\ToDoList.db');
    }

    public function newRequest($type , $login , $password)
    {
        switch ($type) {
            case 'userAdd':
                return $this->userAdd($login , $password);
            case 'userLogin':
                return $this->userLogin($login , $password);
        }
    }



    public function returnAll()
    {
        $result = $this->pdo->query("SELECT * FROM users")->fetchAll();
        return $result;
    }

    public function userAdd($login , $password)
    {   
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE login = :login AND password = :password");
        $stmt->execute([':login'=>$login , ':password' => $password]);
        if ($stmt->fetchAll()){
            return "Username taken";
        }
        $this->pdo->prepare('INSERT INTO users (login, password) VALUES (?, ?)')->execute([$login, $password]);
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE login = :login");
        $stmt->execute([':login'=>$login]);
        return $stmt->fetchAll();
        
    }

    public function userLogin($login , $password)
    {   

        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE login = :login AND password = :password");
            $stmt->execute([':login'=>$login , ':password' => $password]);

        } catch (Exception $e){
            return 'Eror:'.  $e->getMessage()."\n";
        };

        if ($result = $stmt->fetchAll()) {
            return $result;
        };

        return 'Cant login';
    }

}