<?php

 if(isset($_REQUEST['email']))   {
     
   $recipient="melissaclausen@u.boisestate.edu";
        $subject="Form to email messege";
        $senderEmail=$_REQUEST['email'];
        $mailBody=$_REQUEST['input'];
        
        
       if( mail($recipient, $subject, $mailBody, "From:" . $senderEmail))
           
           echo 'Success';
     
        echo( "Your message was sent");    

 }
      echo( "Doesn't work.");    

        
    end;