<?php
  require_once 'classes/Dao.php';
  require_once 'classes/Render.php';
  $dao = new Dao();
    session_start();
?>
<html>

  <head>
      <!--Javascrip!-->
             <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
                   <script type="text/javascript" src="js/image_mouseover.js"></script>
        <script type="text/javascript" src="js/main2.js"></script>
              <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
              <script type="text/javascript" src="js/anime.min.js"></script>
             <script type ="text/javascript" src="js/main.js"></script>
             <script type ="text/javascript" src="js/valid.js"></script>



<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<!--Fonts-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">  
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Fredericka+the+Great|Josefin+Slab" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Playfair+Display" rel="stylesheet">
    <!--Stylesheets-->
      	<link rel="stylesheet" type = "text/css" href = "css/style1.css">	
            	<link rel="stylesheet" type = "text/css" href = "css/normalize2.css">	
       	<link rel="stylesheet" type = "text/css" href = "css/pater.css">	

       	<link rel="stylesheet" type = "text/css" href = "css/component2.css"> 	
    <link rel="stylesheet" type = "text/css" href = "css/normalize.css"> 
	<link rel="stylesheet" type = "text/css" href = "css/component.css">
      </head>
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
      echo ("welcome ".$_SESSION['name']."!");

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
          
 