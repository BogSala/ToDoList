<?php

require '../model/Model.php';

$model = new Model();
$response = $model->newRequest($_POST['requestType'] , $_POST['login'] , $_POST['password']);

if ($response){
    $jsonResponse= array("body" =>$response , "status" =>true ,"type" => $_POST['requestType']);
    echo json_encode($jsonResponse);
} else {
    $jsonResponse = array("status" => false );
    echo json_encode($jsonResponse);
}

// echo($model->newRequest($_POST['requestType'] , $_POST['login'] , $_POST['password']));
// var_dump($model->userAdd('lehass' , 'furry'));
// var_dump($_POST);