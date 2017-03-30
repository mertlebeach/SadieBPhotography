<?php
  session_start();

  require_once 'classes/Dao.php';
  $dao = new Dao();

  
$username= htmlentities($_POST['username']);
$password= htmlentities($_POST['password']);    


  if (filter_var($email, FILTER_VALIDATE_EMAIL)!=true) {
    $_SESSION['message'] = "Invalid email: Please try again!";
      
    $_SESSION['mtype'] = 'bad';
    $_SESSION['inputs'] = $_POST;
  
    header("Location:contact.php");
 
    exit;
  } else {
    unset($_SESSION['inputs']);
    $_SESSION['message'] = "Thanks for your inquiry! We will get back to you as soon as possible!";
    $_SESSION['mtype'] = 'good';
  }


    $dao->save($email,$input);

header("Location:contact.php");

exit;