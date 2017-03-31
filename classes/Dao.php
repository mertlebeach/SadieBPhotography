<?php

require_once 'KLogger.php';

class Dao {
  

      private $host = "us-cdbr-iron-east-03.cleardb.net";
      private $db = "heroku_2f4decd2ae70db4";
      private $user = "bfbdbf41253232";
      private $pass = "0950cb64";
    
    
//      private $host = "localhost";
//      private $db = "Heyo";
//      private $user = "root";
//      private $pass = "root";
//      private $log;
//    

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
//   public function does_username_exist($username){
//      
//      $conn= $this->getConnection();
//     //$username = mysqli_real_escape_string($username);
//     // $username = preg_replace('/\s+/','',$username);
//
//      $name = $conn->quote($username);
//     echo("SELECT username FROM login WHERE username = ".$name );
//       $rows=$conn->query("SELECT username FROM login WHERE username = ".$name  );
// 
//       if($rows){
//        
//             foreach($rows as $row){
//
//                if ($username === $row["username"]){
//                    echo("yay!");
//                      return TRUE;
//
//                }
//            }
//       }
//      return FALSE;
//   }   
//  public function is_password_correct($username, $password){
//      
//      $conn= $this->getConnection();
//     //$username = mysqli_real_escape_string($username);
//
//    //  $username = preg_replace('/\s+/','',$username);
//
//      $name = $conn->quote($username);
// 
//      $rows=$conn->query("SELECT password FROM login WHERE username = ".$name  );
// 
//       if($rows){
//        
//             foreach($rows as $row){
//
//                if ($password === $row["password"]){
//                     return TRUE;
//
//                }
//            }
//       }
//      return FALSE;
//      }
    
}

