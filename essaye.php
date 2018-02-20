<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Modal form</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
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
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
  } );
  </script>
</head>
<body id="o">
 
<div id="dialog-form" title="Enregistrer un nouveau produit" >
  
 <table id="o"></table>
  <form>
    <fieldset>
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
     
     
    </fieldset>
  </form>
</div>
<button id="create-user">Nouveau</button>
 
 
</body>
</html>