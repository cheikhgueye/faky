<?php

 extract($_POST);

         try {
             $bdd = new PDO('mysql:host=;dbname=jquery;charset=utf8', 'root', '774262278',
                      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
             $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

             // requete a executer
             $sql = 'select * from user where login=:login and pwrd=:psw ';

             // preparation de la requete
             $req = $bdd->prepare($sql);
             //execution de la requete
             $req->execute(
                  array(
                        'login' => $login,
                        'psw' => $pass,
                      ));

             $info = $req->fetchAll();
             $_SESSION['user'] = $info;
             if (count($info) == 0) {
                 echo 'erreur';
             } else {
                 echo  json_encode($_SESSION['user']);
             }
         } catch (Exception $e) {
             die('Erreur : '.$e->getMessage());
             echo 'pas de connexion';
         }
