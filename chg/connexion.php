<?php
try{
    $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', 'mustang22',

    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));        
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}