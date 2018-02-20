


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

  <div class="container-fluid">
  <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-6">
      <form id="form" name="form">
          <input type="text" name="nom" min="2" id="nom" placeholder="Votre Nom"><span id="ernom"></span> <br>
          <input type="number" name="" id="age" placeholder="Votre Age"><span id="erage"></span><br>
         Aimez vous la programmation <br>
         <input type="radio" name="aime" id="oui"  >oui 
         <input type="radio" name="aime" id="non" >non  <br>
         <p id="lan">
         <input type="checkbox" name="c" id="" value="c" >c 
         <input type="checkbox" name="c1" id=""  value="pytho">python  
         <input type="checkbox" name="c2" id="" value="js" >js 
         <input type="checkbox" name="c3" id="" value="autres">autres
         </p><span id="erl"></span><br>
         <input type="button" value="envoyer" name="en" id="en" class="btn" >


      </form>
  <span id="msg"></span>
      </div>


  </div>
  </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript" >
    var nom= document.getElementById('nom')
    var age= document.getElementById('age')
    document.getElementById('lan').style.display='none'
    document.getElementById('oui').addEventListener('click',function(){
        document.getElementById('lan').style.display='block'

    })
  document.getElementById('en').addEventListener('click',function(){
    
    var c=0;
    if(nom.value==''){
      document.getElementById('ernom').innerHTML="le nom est obligatoire"
      c=c+1
    }
    else if(  nom.value.length<2){
document.getElementById('ernom').innerHTML="le nombre minimal de caractere est 2"

    }
    else if(age.value==''){
     document.getElementById('erage').innerHTML="l'age est obligatoire"
    }
    else if(age.value<14 || age.value>90){
        document.getElementById('erage').innerHTML="l age n est pas valide"
    }
   var c= document.form.c.length

     if( document.getElementById('oui').checked ==  true){
        if(countChecked()==0){
      document.getElementById('erl').innerHTML="choisir un language"
     
        }
        else{
            document.getElementById('msg').innerHTML="ton nom est "+ nom.value+
            " et ton age est "+age.value+" ans et vos languages sont"
          
         
         


        }
      }
      if( document.getElementById('non').checked = true){
        document.getElementById('non').checked = false
         if(nom.value!='' && age.value!=''){
            document.getElementById('msg').innerHTML="ton nom est "+ nom.value+
            " et ton age est "+age.value+" ans tes language "
        for(i=0;i<val().length;i++){
            document.getElementById('msg').innerHTML+= val()[i]+";" 
        }
         }
       
      }
      console.log(val()[0] ) 
  })
 function countChecked()
{
var total = 0;
for ( var i = 0; i < document.form.elements.length; i++ )
{
if ( document.form.elements[ i ].type == 'checkbox' )
{
if ( document.form.elements[ i ].checked == true )
{
total += parseInt( document.form.elements[ i ].value );
}
}
}
return total;
}
function countChecked()
{
var total = 0;
for ( var i = 0; i < document.form.elements.length; i++ )
{
if ( document.form.elements[ i ].type == 'checkbox' )
{
if ( document.form.elements[ i ].checked == true )
{
total += parseInt( document.form.elements[ i ].value );
}
}
}
return total;
}
function val()
{
var val = [];
for ( var i = 0; i < document.form.elements.length; i++ )
{
if ( document.form.elements[ i ].type == 'checkbox' )
{
if ( document.form.elements[ i ].checked == true )
{
val.push(document.form.elements[ i ].value );
}
}
}
return val;
}

console.log(val())
</script>
<style>
    #form{
        margin-top: 20px;
        border: solid 1px;
       
        padding-left: 100px; padding-top: 60px;padding-bottom: 60px;
        box-shadow: 10px 5px 5px;

    
        
    }
    #age{
        margin-top: 10px;
      }
</style>