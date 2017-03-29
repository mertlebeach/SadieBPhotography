<?php

require_once 'KLogger.php';

class Dao {
    
private $host = "localhost"; 
private $db = "Heyo";
private $user = "root";
private $pass = "root";
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
      echo "issue with the connections";
      $this->log->LogFatal($e);
      exit;
    }
    $this->log->LogDebug("Got a database connection");
    return $conn;
  }
  
  public function save ($input, $email) {
              try{
        $conn= $this->getConnection();
        }catch(Exception $e){
            echo e;
        }
    $this->log->LogInfo("Saving email: " . $input);
    $this->log->LogInfo("Saving input: " . $email);

    $conn = $this->getConnection();
    $saveQuery = "insert into inquiry (inquiry, email) values (:input, :email)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":email", $email);
    $q->bindParam(":input", $input);
    $q->execute();
  }
}

