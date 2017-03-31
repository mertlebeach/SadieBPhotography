<?php
    
  include("header1.php");
$dao->ensure_logged_in();

?>
<div class="clients">
  <h1> <?php echo($_SESSION["name"]);?></h1>
  <h1>Inquires</h1>
   <?php Render::renderTable($dao->getComments()); ?>

  </div>
 <?php
    include('footer.php');
?>