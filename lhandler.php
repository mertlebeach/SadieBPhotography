<?php
  session_start();
 

  require_once 'classes/Dao.php';
  $dao = new Dao();


$username= htmlentities($_POST['username']);
$password= htmlentities($_POST['password']);    


  if ($dao-> does_username_exist($username)) {
 
      if( $dao->is_password_correct($username,$password)){
           unset($_SESSION['inputs']);

        $_SESSION['mtype'] = 'good';
  
        header("Location:inquiries.php"); 
           exit;
      }
             $_SESSION['message'] = "Wrong password.";
    $_SESSION['mtype'] = 'bad';
              $_SESSION['inputs'] = $_POST;

 
   
  } else {
    $_SESSION['message'] = "Wrong username and/or password.";
    $_SESSION['mtype'] = 'bad';
              $_SESSION['inputs'] = $_POST;

  }

 

header("Location:clients.php");

exit;