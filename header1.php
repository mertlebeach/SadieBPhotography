<?php
  require_once 'classes/Dao.php';
  require_once 'classes/Render.php';
  $dao = new Dao();
    session_start();
?>
<html>

  <head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">  
	<link rel="stylesheet" type = "text/css" href = "style1.css">	
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Fredericka+the+Great|Josefin+Slab" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Playfair+Display" rel="stylesheet"></head>
 <body >
    <div id="header">
     <div id ="logo">
	 <a id="anchorl" href="index.php"><div id ="logo1"> Sadie B</div> <div id = "logo2">Photography</div></a> 
     </div>
     <div id = "nav">
      <ul class="nav-class">
            <?php
  if (isset($_SESSION['name'])) {?>
  <li id="welcome_message" >
    <?php
      echo ("Welcome ".$_SESSION['name']."!");

    ?>
       <?php } ?>
  </li>
        <li><a href="gallery.php">gallery</a></li>
        <li><a href="details.php">about</a></li>
	    <li><a href="contact.php">contact</a></li>
            <?php
  if (!isset($_SESSION['name'])) {?>
         <li><a href="clients.php">admin login</a></li>

       <?php } ?>            <?php
  if (isset($_SESSION['name'])) {?>
       <li><a href="inquiries.php">inquiries</a></li>

  <form id="logout" action="logout.php" method="post" class="logout">
    <?php
        
    ?>
      <input type ="submit" value="Log out"/>
       <?php } ?>
  </form>
      </ul>
     </div>
    </div>