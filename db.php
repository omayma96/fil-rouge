<?php
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
);
try{
    //$db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '', $options);
    $db= mysqli_connect('localhost','root','','portfolio');
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connection seccess";
    
}
catch(PDOExeption $e)
{
    echo 'Impossible de se connecter à la base de donnée';
    echo $e->getMessage();
}
?>