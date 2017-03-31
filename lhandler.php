<?php
  session_start();
  

  require_once 'classes/Dao.php';
  $gao = new Dao();
//echo("hello!!! WHy aren't you there");


$username= htmlentities($_POST['username']);
$password= htmlentities($_POST['password']);    




    $gao->is_password_correct($username,$password);

    $gao-> does_username_exist($username);

header("Location:clients.php");

exit;