<<<<<<< HEAD
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
=======
<?php

namespace Fernandez\Gs\Core;
use mysqli;

class Database {

    protected $conn;

    public function __construct()
    {
        $host = "localhost";
        $db = "oop";
        $user = "root";
        $pass = "";
        //mysqli connection
        $this->conn = new \mysqli($host,$user,$pass,$db);
        if ($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
>>>>>>> 57193222f5e359e7b4b6d5bb7299e57f65bd1682
}