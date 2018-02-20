<?php

try {
    $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $sql = 'select  id_categorie id  from sous_categorries where id='.$_GET['id'];

    // preparation de la requete
    $req = $bdd->query($sql);
    //execution de la requete

    $info = $req->fetch();

    $sql1 = 'select (select count(produits.id) from produits where produits.id_sous_cat='.$_GET['id'].') nbProduit,(select count(sous_categorries.id) from sous_categorries where sous_categorries.id_categorie='.$info->id.') nbSousCat,  sous_categorries.nom as sous_cat, categories.nom as categorie from produits ,sous_categorries,categories where sous_categorries.id='.$_GET['id'].' and categories.id='.$info->id;
    $req1 = $bdd->query($sql1);
    //execution de la requete

    $info1 = $req1->fetchAll();

    echo  json_encode($info1);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    echo 'pas de connexion';
}
