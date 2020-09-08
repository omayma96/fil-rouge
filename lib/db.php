<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');

} catch (Exception $e){ // cacher l'erreur 
    echo 'Impossible de se connecter à la base de donnée';
    echo $e->getMessage(); // pour voir exactement l'erreur NB : juste pour moi
    die();
}



?>