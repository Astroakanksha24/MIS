<?php
class dbconn {
protected $database;

function __construct(){
    $this->connect();
}

protected function connect() {
    $this->database = new mysqli('localhost', 'root', '','MIS','8111')  or die("<p>Error connecting to the database<br /><strong>" . mysqli_connect_error() ."</strong></p>" );
}

function __destruct(){
    mysqli_close($this->database);
}

function db(){
     if (!isset($this->database)) { 
        $this->connect(); 
     }
     return $this->database;
  }

  }
  ?>