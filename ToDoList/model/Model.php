<?php 


class Model 
{

    function __construct()
    {
        $this->db = new SQLite3("test.db");
    }

}