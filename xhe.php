<?php

try {
    $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    extract($_POST);

    // requete a executer
    $req = $bdd->prepare('SELECT * FROM produits WHERE nom LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE

        $req->execute(array('term' => $_GET['val'].'%'));

    // preparation de la requete

    //execution de la requete

    $info = $req->fetchAll();

    echo  json_encode($info);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    echo 'pas de connexion';
}
