<?php

/* veillez bien à vous connecter à votre base de données */
try {
    $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $cherche = $_POST['cherche'];
    $requete = $bdd->query('SELECT * FROM produits where nom="'.$cherche.'"'); // j'effectue ma requête SQL grâce au mot-clé LIKE

    // $requete->execute();
    $resultat = $requete->fetch();
    echo json_encode($resultat);
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    echo 'pas de connexion';
}
