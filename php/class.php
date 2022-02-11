<?php

require('sql.php');

class Task{
    public $link ;
    public $number;
    public $text;
    public $requestType;
    public function __construct($number , $text , $requestType)
    {
        $this -> number = $number ;
        $this -> text = $text ;
        $this -> requestType = $requestType ;
    }

    // !!!
    // public function resetCounter()
    // {
    //     mysqli_query( $this -> link , 'ALTER TABLE `tasks` AUTO_INCREMENT = 1' );
    // }
    // public function resetTable()
    // {
    //     mysqli_query( $this -> link , 'TRUNCATE TABLE `tasks`' );
    // }


    public function checkData()
    {
        echo $this ->number . $this ->text . $this ->requestType;
    }

    private function addTask()
    {
        sqlAdd($this -> number , $this -> text);
    }

    private function deleteTask()
    {
        echo 'TRUE';
    }

    public function doRequest()
    {
        if ($this -> requestType == 'add'){
            $this -> addTask($this -> number , $this ->text);
        } else if ($this -> requestType == 'delete'){
            $this -> deleteTask($this -> number);
        }
    }
}