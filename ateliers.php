<?php

try {
    $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // requete a executer

    $sql1 = 'select * from sous_categorries where id_categorie="'.$_POST['cat'].'"';
    $req1 = $bdd->query($sql1);
    //execution de la requete

    $info1 = $req1->fetchAll();

    echo  json_encode($info1);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    echo 'pas de connexion';
}
