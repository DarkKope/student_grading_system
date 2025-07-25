<?php

namespace Fernandez\Gs\Core;
use mysqli;

class Database 
{
    protected $conn;

    public function __construct()
    {
        $host = "localhost" ;
        $db = "oop";
        $user = "root";
        $pass = "";
        //mysqli connectiion 
        $this-> conn = new \mysqli($host, $user, $pass, $db);
        if ($this-> conn ->connect_error) {
            die ("Connection failed: ". $this->conn->connection_error);
        }

    }
}