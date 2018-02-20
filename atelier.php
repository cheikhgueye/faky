  
   <?php

try {
    $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $c = 0;
    //requete a executer
    if (isset($_POST['produit']) && $c == 0) {
        $p = $_POST['produit'];

        $sql1 = 'insert  into produits(nom,prix_unitaire,image,id_sous_cat) values(:nom,:prix_unitaire,:image,:id_sous_cat)';
        $req1 = $bdd->prepare($sql1);
        $req1->execute(array(
      'nom' => $p[0],
      'prix_unitaire' => $p[1],
      'image' => $p[2],
      'id_sous_cat' => $p[3],
    ));

        echo 'ok';
        ++$c;
    }
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
    echo 'pas de connexion';
}
