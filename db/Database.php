<?php

class Database
{
    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli("localhost", "root", "", "andeanmusic");
        $this->mysqli->set_charset("utf8");
        
        if($this->mysqli->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->mysqli;
    }
}

