

<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script>
  $( function() { 
 
    function addUser() {
    }
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      modal: true,
      buttons: {
        "Enregistrer": addUser,
        Annuler: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });
 
    $( "#create-user" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });

    dialog = $( "#tab" ).dialog({
      autoOpen: false,
      modal: true,
      buttons: {
        "Enregistrer": addUser,
        Annuler: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });
 
    $( "#tab" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });
  } );
  </script>
    <!-- Bootstrap CSS -->
  </head>
  <body id="ac">
<div class="container-fluid" >
   <header class="row" >
       <div class="col-md-2" > <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModals">New</button>

</div>
       <div class="col-md-2" ></div>
       <div class="col-md-6" > 
            <form action="#" id="for">
            <input type="text" placeholder="rechercher produit" class="form-control ch" name="cherche"  id="cherche" />
            
            </div><div class="col-md-2" >
            <input type="submit" name="connexion" value="rechercher" class="btn" id="c">
             </div>
         
        </form>
   </header>
   <div class="row">
<div class="col-md-3">  
     </div>
<div class="col-md-6">
<table  border="1px">
          <tr>
              <th>nom_produit</th>
              <th>quantite</th>
              <th>prix_unitaire</th>
              <th>image</th>
              <th>deatails</th>
          </tr>

   <tbody id="table"></tbody>
      </table>
</div>
<div class="col-md-3"></div>


   </div>

</div>
    <div class="row">
        <div class="col-md-12">
           
<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModalt" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Details du produit</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
        <div id="tabs"   title="Dialog">
  <ul>
    <li><a href="#tabs-1">CATEGORIES</a></li>
    <li><a href="#tabs-2">SOUS CATEGORIES</a></li>
  </ul>
  <div id="tabs-1">
  </div>
  <div id="tabs-2">
  </div>
  
</div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>
  
</div> 
        </div>
    </div>
       

</div>

 
    <!-- Optional JavaScript -->

<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModals" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" >New Produit</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <form action="">
         <div class="container">
   
  <form action="#" id="f">
  <div class="alert alert-danger" >
        
</div>
<div class="alert alert-success als" >
        <h4>prosuit ajoute</h4>
</div>
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control" id="nom" placeholder="nom" name="nom">
    </div>
    <div class="form-group">
      <label for="pu">Prix_unitaire:</label>
      <input type="number" class="form-control" id="pu" placeholder="prix_unitaire" name="pu">
    </div>
    <div class="form-group">
      <label for="img">Image:</label>
      <input type="file" class="form-control" id="img" placeholder="" name="img">
    </div>
    <div class="form-group">
    <label for="cat">Categorie:</label>
    <select name="cat" id="cat">
   
            </select>
    </div>
    <label for="cat">SousCategorie:</label>
    <select name="sc" id="sc">
                
            </select>
    </div>
    
    <input type="submit" class="btn btn-default submit" value="enregistrer">
  </form>
  <script src="script.js"></script>
</div>

         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script
			  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
			  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
			  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.js"></script>

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
     
   <script src="script.js"></script>
 
</body>
</html>

<style>
    #tabs{
        width: 400px;

    }
    .cat{
      margin-left: 100px;
    }
    td{
      border-top-width: 6px;
      border-width: 5px ; 
    }
    th{
      border-top-width: 6px;
      border-width: 5px ; 
    }
</style>
<style>
      .png{
        height: 60px;
        width: 60px;
    }
    header{
    height:100px;
    background-color:grey;
    border:solid;
    border-width:6px;
    padding: 20px ;
    border-radius: 20px;
    }
    table{
      margin-top: 30px;
    
      padding:50px;
      border-top-width: 6px;
      border-width: 20px ;
      margin-left: -0px;
    }
</style><!DOCTYPE html>
<html>
<head>
	<link href="../assets/styles.min.css" rel="stylesheet">
	<title>jQuery UI Dialog: Open Dialog on Click</title>
	<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
</head>
<body>

	</div>
	
</body>
</html>