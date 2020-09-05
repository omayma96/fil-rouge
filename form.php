<?php 

$message_send = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $name = $_POST['name'];
   
        $subject = $_POST['subject']; 
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        // $email_from = 'omayma.hajjami@gmail.com';
    
        // $email_subject = "New form submission";
    
        // $email_body = "User Name: $name.\n".
        //                     "subject: $subject.\n".
        //                         "User Email: $email.\n".
        //                             "User Message: $message.\n";
    
    
        $to = "omayma.hajjami@gmail.com";
    
        $body = "";
    
        $body .= "From : ".$name. "\r\n";
        $body .= "Email : ".$email. "\r\n";
        $body .= "Message : ".$message. "\r\n";
    
    
        // mail($to,$subject,$body);
    
         header("Location: contact.php");

        $message_send = true;
    
    }


   

}

    // $name = $_POST['name'];
    // $subject = $_POST['subject'];
    // $mailFrom = $_POST['email'];
    // $message = $_POST['message'];

    // $mailTo = "omayma.hajjami@gmail.com";
    // $headers = "From : " . $mailFrom;
    // $txt = "you have received an e-mail from".$name . ".\n" . $message;


    // mail($mailTo, $subject, $txt, $headers);
    // header("Location: contact.php");

?>
