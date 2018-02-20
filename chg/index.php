<!DOCTYPE html>
<html lang="fr" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Popup d'inscription</title>
		<meta name="description" content="Popup en CSS3 et JS pour le blog webdesignweb.fr" />
		<meta name="keywords" content="modal, window, overlay, modern, box, css transition, css animation " />
		<meta name="author" content="Stratis BAKAS" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<!-- LE CONTENU DE LA POPUP -->

		<div class="modal blur-effect" id="popup">
			<div class="popup-content">
				<h3>Inscription News</h3>
				<div>
					
				<label for="name">Nom</label>
      <input type="text" name="name" id="name" value="" class="text ui-widget-content ui-corner-all">
      <label for="quantite">Quantite</label>
      <input type="number" name="quantite" id="quantite" value="" class="text ui-widget-content ui-corner-all">
      <label for="prix">Prix</label>
      <input type="number" name="number" id="number" value="" class="text ui-widget-content ui-corner-all">
      <label for="image">Image</label>
      <input type="" name="image" id="image" value="" class="text ui-widget-content ui-corner-all">
      <label for="souscategorie">Categorie</label><select>
        <option value="">produit</option>
      </select>
      
      <label for="souscategorie">Sous Categorie</label><select>
        <option value="">souscategorie</option>
      </select>
	
					<input type="submit" class="submit" value="Ajouter" />
					
					<div class="close"></div>
				</div>
			</div>
		</div>

		<!-- FIN DE LA POPUP -->
		
		<!-- CONTENU DE LA PAGE -->

		<div class="container">

			<div class="content">

				
				<button class="popup-button" data-modal="popup">NEW !</button>

				

			</div><!-- .content -->
			<div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
               
                
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Produit" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Quantité" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Prix Unitaire" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Photo" disabled></th>
                    </tr>
                </thead>
                <?php
 include 'connexion.php';
?>
                <tbody>
                <?php
       $sql = "select   	nom,prix_unitaire ,image 	 from produits";
        $reponse = $bdd->query($sql); 
        while($donnees = $reponse->fetch()){
            echo "
        <tr>
        <td>".$donnees['nom']."</td>
          <td>".$donnees['n']."</td>
          <td>".$donnees['prix_unitaire']."</td>
          <td>".$donnees['image']."</td>
      
          
          
         
        </tr>";
        }
        $reponse->closeCursor(); 
         ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  
    <div class="modal blur-effect" id="popup">
			<div class="popup-content">
				<h3>Inscription News</h3>
				
  
 
      <label for="name">Nom</label>
      <input type="text" name="name" id="name" value="" class="text ui-widget-content ui-corner-all">
      <label for="quantite">Quantite</label>
      <input type="number" name="quantite" id="quantite" value="" class="text ui-widget-content ui-corner-all">
      <label for="prix">Prix</label>
      <input type="number" name="number" id="number" value="" class="text ui-widget-content ui-corner-all">
      <label for="image">Image</label>
      <input type="" name="image" id="image" value="" class="text ui-widget-content ui-corner-all">
      <label for="souscategorie">Categorie</label><select>
        <option value="">produit</option>
      </select>
      
      <label for="souscategorie">Sous Categorie</label><select>
        <option value="">souscategorie</option>
      </select>
     
   
</div>
			</div>				
		</div><!-- .container -->

		<!-- FIN DU COTENU DE LA PAGE -->

		<div class="overlay"></div><!-- La div overlay -->
		
		<!-- Le script qui crée la popup -->
		<script src="js/popup.js"></script>

		<!-- Pour l'effet blur -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
	</body>
</html>