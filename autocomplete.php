<?php


/* veillez bien à vous connecter à votre base de données */
try {
    $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $term = $_GET['term'];

    $requete = $bdd->prepare('SELECT * FROM produits WHERE nom LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE

    $requete->execute(array('term' => $term.'%'));

    $array = array(); // on créé le tableau

    while ($donnee = $requete->fetch()) { // on effectue une boucle pour obtenir les données
    array_push($array, $donnee['nom']); // et on ajoute celles-ci à notre tableau
    }

    echo json_encode($array); // il n'y a plus qu'à convertir en JSON
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    echo 'pas de connexion';
}
