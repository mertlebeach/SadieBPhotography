<?php
    include('header1.php');

?>
<div class="contact">
    <form method ="POST" action="esubmit.php">
    <input type = "text" id ="email" name = "email">
    <input type = "text" id = "input" name ="input">
    <input type="submit" value="Submit">   
    </form>
    <p>A form will be here for the user to contact the photographer.</p>
</div>
<?php
    include('footer.php');
?>
