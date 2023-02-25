<?php

class Database{

    public $conn;
    public function __construct()
  
    {
        $host = "localhost";
        $dbuser = "root";
        $dbPass = "";
        $dbName = "test00";
        try {
            $this->conn  = new PDO("mysql:host=$host;dbname=$dbName",$dbuser, $dbPass);
            // set the PDO error mode to exception
            
            // echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }

    public function exec($sql)
    {
      $statement = $this->conn->prepare($sql);
      $statement->execute();

    }
    public function fetch($sql)
    {
      $statement = $this->conn->prepare($sql);
      $statement->execute();
      return $statement->fetchALL();

    }

}


?>