<?php

require_once 'classes/Dao.php';

$dao=new Dao();

$email= htmlentities($_POST['email']);
$input= htmlentities($_POST['input']);
    
    $dao->save($email,$input);

header("Location:contact.php");

end;