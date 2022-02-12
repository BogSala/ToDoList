<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'itstart';

$link = mysqli_connect($host , $user , $password , $db_name) or die(mysqli_error($conections));
mysqli_query($link, "SET TEXT 'utf8'");
// ! $fullTable = mysqli_query( $link, "SELECT * FROM `tasks`" );

// ! $reset = 'ALTER TABLE `tasks` AUTO_INCREMENT = 1';
// ! $fullReset = 'TRUNCATE TABLE `tasks`';

// toDo Задать 
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $password , $opt);

function sqlAdd($number ,  $task) // SELECT name FROM tasks WHERE task =
{   
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO `tasks`(`number`, `text`) VALUES (? , ?) ');
    $stmt->execute(array($number , $task));
}

function sqlRemove($number)
{
    global $pdo;
    $stmt = $pdo->prepare('DELETE FROM `tasks` WHERE number = ? ');
    $stmt->execute(array($number));
}

// for ($data = []; $row = mysqli_fetch_assoc($sqlTable); $data[] = $row);  
