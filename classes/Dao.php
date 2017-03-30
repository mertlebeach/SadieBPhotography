<?php

require_once 'KLogger.php';

class Dao {

      private $host = "us-cdbr-iron-east-03.cleardb.net";
      private $db = "heroku_859fd3a9fcdab04";
      private $user = "bdd21646e8463c";
      private $pass = "085f2cbe";
    
private $log;
    

  public function __construct () {
    $this->log = new KLogger ("/tmp/log.txt" , KLogger::WARN);
  }

  public function getConnection () {
    $this->log->LogDebug("Trying to get a database connection...");
    try {
      $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
            $this->pass);
    } catch (Exception $e) {
      $this->log->LogFatal($e);
      exit;
    }
    $this->log->LogDebug("Got a database connection");
    return $conn;
  }
  
  public function save ($email, $input) {
 
    $this->log->LogInfo("Saving email: " . $email);
    $this->log->LogInfo("Saving input: " . $input);

    $conn = $this->getConnection();
    $saveQuery = "INSERT INTO inquiry (inquiry, email) VALUES (:input, :email)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":email", $email);
    $q->bindParam(":input", $input);
    $q->execute();
  }
}

