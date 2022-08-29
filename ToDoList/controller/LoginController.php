<?php

require '../model/Model.php';

$model = new Model();
$response = $model->newRequest($_POST['requestType'] , $_POST['login'] , $_POST['password']);

session_start();

if ($response){
    $jsonResponse= array("body" =>$response , "status" =>true ,"type" => $_POST['requestType']);
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    echo json_encode($jsonResponse);


} else {
    $jsonResponse = array("status" => false );
    echo json_encode($jsonResponse);
}
