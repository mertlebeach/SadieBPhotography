<?php
  session_start();

  require_once 'classes/Dao.php';
  $dao = new Dao();


$email= htmlentities($_POST['email']);
$info= htmlentities($_POST['info']);
$username= htmlentities($_POST['username']);
$password= htmlentities($_POST['password']);    



    $dao->save($email,$input);

header("Location:contact.php");

end;