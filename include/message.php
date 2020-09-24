<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query="INSERT INTO contact (cname,cemail,csubject,cmessage) "; 
$query.="VALUES('$name','$email','$subject','$message')";
$run = mysqli_query($db,$query);
if($run){
    echo 'votre message est arrivé avec succès, Merci !';
}
