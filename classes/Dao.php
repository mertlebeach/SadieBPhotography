<?php

require_once 'KLogger.php';

class Dao {
    
private $host = "us-cdbr-iron-east-03.cleardb.net"; 
private $db = "heroku_2f4decd2ae70db4";
private $user = "bfbdbf41253232";
private $pass = "0950cb64";
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

  public function getComments () {
    $this->log->LogInfo("Getting comments from db...");
    $conn = $this->getConnection();
    return $conn->query("select comment, date_entered, file_path from comment order by date_entered desc");
  }    
  public function save ($input, $email) {
    $this->log->LogInfo("Saving email: " . $comment);
    $this->log->LogInfo("Saving input: " . $input);

    $conn = $this->getConnection();
    $saveQuery = "insert into inquiry (inquiry, email) values (:input, :email)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":email", $email);
    $q->bindParam(":input", $input);
    $q->execute();
  }
}