<?php 
$name = $phone = $email = $message = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $name = $_POST['name'];
   
    $phone = $_POST['phone']; 
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'omayma.hajjami@gmail.com';

    $email_subject = "New form submission";

    $email_body = "User Name: $name.\n".
                        "User Number: $phone.\n".
                            "User Email: $email.\n".
                                "User Message: $message.\n";


    $to = "omayma.hajjami@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
 
}
