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
    <!--STYLE SHEETS!-->
	<link rel="stylesheet" type = "text/css" href = "css/style.css">	
    <link rel="stylesheet" type = "text/css" href = "css/normalize.css"> 
	<link rel="stylesheet" type = "text/css" href = "css/component.css">
<!--FONTS!-->


	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Fredericka+the+Great|Josefin+Slab" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Playfair+Display" rel="stylesheet">
       
          <!--JAVASCRIPT!-->

             <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type ="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
      <script type ="text/javascript" src="js/main.js"></script>
      <script type ="text/javascript" src="js/anime.min.js"></script>
             <script type="text/javascript" src="js/valid.js"></script>
    
  
    
    </head>


 <body>
     <div id= "top">
    <div id="header">
     <div id ="logo">
	 <a href="/Sadie/index.php"><div id ="logo1"> Sadie B</div> <div id = "logo2">Photography</div></a> 
     </div>
     <div class = "nav">
                 <ul class="nav-class">
            <?php
  if (isset($_SESSION['name'])) {?>
  <li class="welcome_message">
    <?php
      echo ("welcome ".$_SESSION['name']."!");

    ?>
       <?php } ?>
        <li id ="g"><a href="/Sadie/gallery.php">gallery</a></li>
        <li id ="b"><a href="details.php">about</a></li>
	<li id = "c"><a href="contact.php">contact</a></li>
            <?php
  if (!isset($_SESSION['name'])) {?>
         <li><a href="clients.php">admin login</a></li>

       <?php } ?>
            <?php
  if (isset($_SESSION['name'])) {?>
    <li id = "current_page"><a href="inquiries.php">inquiries</a></li>

  <form id="logout" action="logout.php" method="post" class="logout">
    <?php
        
    ?>
      <input type ="submit" value="Log out"/>
       <?php } ?>
  </form>
                     
       </ul>
     </div>

    </div>
    </div>
    
      <div class= "segmenter" style="background-image: url('background-8.jpg')"> </div>
      

