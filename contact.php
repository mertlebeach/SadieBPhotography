<?php
    include('header1.php');
?>
<div class="contact">
    <form method ="POST" action="handler.php">
    <input type = "text" name = "email">
    <input type = "textarea" name ="input">
    <textarea rows="4" cols="50"></textarea> <input type="submit">   
    </form>
    <p>A form will be here for the user to contact the photographer.</p>
</div>
<?php
    include('footer.php');
?>
