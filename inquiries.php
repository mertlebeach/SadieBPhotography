<?php

  include("header1.php");
  require_once 'classes/Dao.php';
  require_once 'classes/Render.php';
  $dao = new Dao();
?>
<div class="clients">
 
  <h1>Inquires</h1>
   <?php Render::renderTable($dao->getComments()); ?>

  </div>
 <?php
    include('footer.php');
?>