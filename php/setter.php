
<?php
header('Access-Control-Allow-Origin: *');
require ('class.php');
// require ('sql.php');

$task = new Task((int)$_POST['number'] - 1  , $_POST['text']  , $_POST['requestType']);
$task -> link = mysqli_connect($host , $user , $password , $db_name);
$task -> doRequest();

