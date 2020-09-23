<?php
session_start();
include('../../include/db.php');

if(isset($_POST['uprofile'])){    
$name=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$query="UPDATE admin_users SET ";
$query.="username='$name',";
$query.="password='$password',";
$query.="email='$email' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    $_SESSION['username']=$name;
    header("location:../?editprofile=true&msg=updated");
}    

}    
    


