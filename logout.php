<?php
session_start();
if($_SESSION['email']){
    session_destroy();
    header("location: ./login");
}



?>