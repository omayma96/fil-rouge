<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // méthode d'afficher les infos
    $db->setATTribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // afficher les erreurs
} catch (Exception $e){
    echo 'Impossible de se connecter à la base de donnée';
    echo $e->getMessage();
    die();
}



?>