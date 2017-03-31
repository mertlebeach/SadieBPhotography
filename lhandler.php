<?php
  session_start();

  require_once 'classes/Dao.php';
  $dao = new Dao();

  
$username= htmlentities($_POST['username']);
$password= htmlentities($_POST['password']);    



       echo("hey");

    $dao->is_password_correct($username,$password);

    $dao-> does_username_exist($username);

header("Location:clients.php");

exit;