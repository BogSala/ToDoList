<?php

require '../model/User.php';

$model = new User();


// $response = $model->userLogin( 'adminok' , 'admin');
// print_r($response);
print_r($model->newRequest( 'userLogin','adminok' , 'admin'));
// session_start();

// var_dump($_SESSION);
// var_dump($model->returnAll());
// var_dump($model->getUser('admin' , 'admin'));
// if ($model->newRequest("userLogin" , 'admin' , 'admin')){
//     var_dump($model->newRequest("userLogin" , 'admin' , 'admin'));
//     header('Location: http://localhost/projects/ToDoList/view/main.html' ,true , 307);
//     // die();
// };
// header('Location: http://localhost/projects/ToDoList/view/main.html' ,true , 307);
// var_dump($model->returnAll());
// var_dump($model->userAdd('lehasss' , 'furry'));
// var_dump($model->userLogin('leha' , 'furry'));