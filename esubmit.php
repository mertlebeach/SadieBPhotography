<?php

        $recipient="melissa.c.bower@outlook.com";
        $subject="Form to email messege";
        $senderEmail=$_POST['email'];
        $sender=$_POST['email'];
        
        
        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
        
    header("Location:contact.php");    
        
        
    end;