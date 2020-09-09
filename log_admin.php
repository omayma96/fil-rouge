<?php 
session_start();
include 'db.php';
$er="";
if(isset($_POST['admin'])){
   $email = htmlspecialchars($_POST['email']) ;
   $pass = htmlspecialchars($_POST['password']);
    $query = $db->query("SELECT * FROM users WHERE email='$email' AND password='$pass' ");
        if($query){
                
                $_SESSION['email']=$email;
                    header("location: Dashboard.php");
                    exit();
                
            
        }else{
            echo '<script>alert("Attention le mot de passe ou bien le email est incorrect")</script>';
            
        }
    
}
  
?>  
  

