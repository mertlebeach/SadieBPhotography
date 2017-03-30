<?php


class Dao {
    

    
private $host = "us-cdbr-iron-east-03.cleardb.net"; 
private $db = "heroku_2f4decd2ae70db4";
private $user = "bfbdbf41253232";
private $pass = "0950cb64";
 
  public function getConnection () {
     
    try {
      $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
            $this->pass);
    } catch (Exception $e) {
          echo "issue with the connections";
      exit;
    }
 
    return $conn;
  }
  
  public function save($email, $input) {
 
      echo($email);
    $conn = $this->getConnection();
    $saveQuery = "insert into inquiry (inquiry, email) values (:input, :email)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":email", $email);
    $q->bindParam(":input", $input);
    $q->execute();
  }
}

