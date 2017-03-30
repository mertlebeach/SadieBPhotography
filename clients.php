<?php
    include('header1.php');
?>
<div class="clients">
 

  <form method="POST" action="lhandler.php"  enctype="multipart/form-data">
    <div>
    <label for="comment">Username</label>
    <input type="text" id="login" value="<?php echo $_SESSION['inputs']['password']; ?> " name="username">
        
        <input type="text" id="password" name="password" value="<?php echo $_SESSION['inputs']['password']; ?>">
    Upload an impage
    <input type="file" name="pic" accept="image/*">
    <input type="submit">
  </form>
  <?php
  if (isset($_SESSION['message'])) {?>
  <div id="message" class="<?php echo $_SESSION['mtype']; ?>">
    <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      unset($_SESSION['inputs']);
    ?>
  </div>
</div>
<?php
    include('footer.php');
?>