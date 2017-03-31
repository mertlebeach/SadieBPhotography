<?php
    include('header1.php');
 require_once 'classes/Dao.php';
  $dao = new Dao();
 
?>
<div class="clients">
 
  <h1>Admin Log on</h1>
  <form method="POST" action="lhandler.php"  enctype="multipart/form-data">
     <label for="comment">Username:</label>
    <input type="text" id="username" value="<?php echo $_SESSION['inputs']['username']; ?> " name="username">
        Password:
        <input type="text" id="password" name="password" value="<?php echo $_SESSION['inputs']['password']; ?>">
 
    <input type="submit" value="Log in">
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