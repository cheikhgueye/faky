<?php


         try {
             $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
                      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
             $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

             // requete a executer
             $sql = 'select * from categories ';

             // preparation de la requete
             $req = $bdd->query($sql);
             //execution de la requete

             $info = $req->fetchAll();

             echo  json_encode($info);
         } catch (Exception $e) {
             die('Erreur : '.$e->getMessage());
             echo 'pas de connexion';
         }
