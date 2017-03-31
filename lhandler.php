<?php
  session_start();
  


//echo("hello!!! WHy aren't you there");


$username= htmlentities($_POST['username']);
$password= htmlentities($_POST['password']);    




    $dao->is_password_correct($username,$password);

    $dao-> does_username_exist($username);

header("Location:clients.php");

exit;