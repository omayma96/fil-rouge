<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
// <?php 
// session_start();
include("../../include/db.php");

if(isset($_POST['admin'])){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $query="SELECT * FROM admin_users WHERE email='$email' AND password='$password'";

    $run = mysqli_query($db,$query);
    $result = mysqli_fetch_array($run);
    if($result){
        $_SESSION['id']=$result['id'];
        $_SESSION['username']=$result['username'];
        header('location:../index.php');
    }else{
        header('location:../login/?msg=iuser');    }
    

        // if($query){
                
        //         $_SESSION['email']=$email;
                    // header("location: admin/index.php");
        //             header('location: /admin/index.php');
        //             exit();
                
            
        // }else{
        //     echo '<script>alert("Attention le mot de passe ou bien le email est incorrect")</script>';
            
        // }
    
}
  

    
    // $query="SELECT * FROM admin_users WHERE user_id='$email' AND user_pass='$password'";
    // $run = mysqli_query($db,$query);
    // $result = mysqli_fetch_array($run);
    // if($result){
    //     $_SESSION['id']=$result['id'];
    //     $_SESSION['username']=$result['username'];
    //     header('location:../');
    // }else{
    //     header('location:../login/?msg=iuser');    }
    
// }
?>  
  