<?php

  include("header1.php");
 
 
?>
<div class="contact">
    
<form method="POST" action="handler.php"  enctype="multipart/form-data">
     <label for="email"> Enter your email:</label>

    <input type = "text"  id ="email" value="<?php echo $_SESSION['inputs']['email']; ?>" name = "email">
         
    What info would you like to know?
         
    <textarea   id ="info"  cols="40" name="info" rows="15"><?php echo $_SESSION['inputs']['info']; ?>  </textarea>
    <input type="submit">   
    </form>
  <?php
  if (isset($_SESSION['message'])) {?>
  <span id="message" class="<?php echo $_SESSION['mtype']; ?>">
    <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      unset($_SESSION['inputs']);
    ?>
       <?php } ?>
    
    
   </span>
</div> 

<?php
    include('footer.php');
?>
