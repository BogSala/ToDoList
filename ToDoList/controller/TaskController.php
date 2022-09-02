<?php

require '../model/TaskList.php';

$taskList = new TaskList();

switch ($_POST['requestType']) {
    case 'add':
        $response = $taskList->add($_POST['id'] , $_POST['task']);
    case 'delete':
        $response = $taskList->delete($_POST['taskId']);
    case 'get':
        $response = $taskList->get($_POST['id']);
}

// $response = $taskList->newRequest($_POST['requestType'] , $_POST['id'] , $_POST['task']);

if ($response){
    $jsonResponse= array("body" =>$response , "status" =>true ,"type" => $_POST['requestType']);
    echo json_encode($jsonResponse);

} else {
    $jsonResponse = array("status" => false );
    echo json_encode($jsonResponse);
}