<?php

require '../model/TaskList.php';

$taskList = new TaskList();

$response = $taskList->newRequest($_POST['requestType'] , $_POST['id'] , $_POST['task']);

if ($response){
    $jsonResponse= array("body" =>$response , "status" =>true ,"type" => $_POST['requestType']);
    echo json_encode($jsonResponse);

} else {
    $jsonResponse = array("status" => false );
    echo json_encode($jsonResponse);
}