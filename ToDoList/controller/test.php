<?php

require '../model/TaskList.php';

$model = new TaskList();



print_r($model->add(1 , 12));
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