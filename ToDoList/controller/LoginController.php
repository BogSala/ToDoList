<?php

require '../model/User.php';
session_start();

$user = new User();

$response = $user->newRequest($_POST['requestType'] , $_POST['login'] , $_POST['password']);


if ($response){
    $jsonResponse= array("body" =>$response , "status" =>true ,"type" => $_POST['requestType']);
    $_COOKIE['id'] = $response[0]['id'];
    $_COOKIE['login'] = $_POST['login'];
    $_COOKIE['password'] = $_POST['password'];
    echo json_encode($jsonResponse);

} else {
    $jsonResponse = array("status" => false );
    echo json_encode($jsonResponse);
}
