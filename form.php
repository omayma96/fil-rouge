<?php 
// $name = $phone = $email = $message = "";

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
//     $name = $_POST['name'];
   
//     $phone = $_POST['phone']; 
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     $email_from = 'omayma.hajjami@gmail.com';

//     $email_subject = "New form submission";

//     $email_body = "User Name: $name.\n".
//                         "User Number: $phone.\n".
//                             "User Email: $email.\n".
//                                 "User Message: $message.\n";


//     $to = "omayma.hajjami@gmail.com";

//     $headers = "From: $email_from \r\n";

//     $headers .= "Reply-To: $email \r\n";
//     mail($to,$email_subject,$email_body,$headers);

//     header("Location: contact.html");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "omayma.hajjami@gmail.com";
    $headers = "From : " . $mailFrom;
    $txt = "you have received an e-mail from".$name . ".\n\n" . $message;


    mai($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}
 
?>
