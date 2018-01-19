


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
  <form method="post" id="formulaire">

	<h3>Coordonnées</h3>

	<label>Mail : <input name="mail" value="" type="text"></label>

	<br>

	<label>Téléphone : <input name="tel" value="" type="text"></label>

	<label>Newsletter : <input name="newsletter" type="checkbox"></label>

	<input value="Envoyer" type="submit">

	</form>

	<div id="post"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</div>   <script src="script.js"></script>  </body>
</html>
<script>
   $(document).ready(function(){
      
            $("#formulaire").submit(function(){
      
                $.ajax({type:"POST", data: $(this).serialize(), url:"post.php",
      
                    success: function(data){
      
                        $("#post").html(data);
  
                    },
      
                                error: function(){
      
                            $("#post").html('Une erreur est survenue.');
    
                    }
      
                });
    
                return false;
    
            });
      
        });
</script>