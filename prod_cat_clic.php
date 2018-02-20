<?php

try {
    $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $sql = 'select  *  from produits where id_sous_cat = (select 
        min(id)from sous_categorries where id_categorie="'.$_GET['p'].'")';

    // preparation de la requete
    $req = $bdd->query($sql);
    //execution de la requete

    $info = $req->fetchAll();

    echo  json_encode($info);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    echo 'pas de connexion';
}
