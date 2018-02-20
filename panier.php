   

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
        <!-- icoen de pagner-->
     <div class="dropdown">
  <div id="cart">
    <p><span id="in-cart-items-num">0</span> Articles</p>
  </div>
                              
  <ul id="cart-dropdown" hidden>
    <li id="empty-cart-msg"><a>Votre panier est vide</a></li>
    <li class="go-to-cart hidden"><a href="/panier/">Voir le panier</a></li>
  </ul>
</div>
<!--     -->
         <form action="">
         <label for="q">Quantité: </label>
<select id="qt" name="q">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select><br>
<button type="button" class="add-to-cart" data-id="432" data-name="Pastilles" data-price="29,00" data-weight="97" data-url="/produit/pastilles-anti-douleurs/">Ajouter au panier</button>
         </form>
         <!--pagner-->
         <table class="table">
  <thead>
    <tr><th>Article</th><th>Prix</th><th>Quantité</th></tr>
  </thead>
  <tbody id="cart-tablebody">
  </tbody>
</table>
        
<p>Sous total : <span class="subtotal"></span>€</p>

<button id="confirm-command">Passer la commande</button>
       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     </body>
   </html>
   <style>
       .dropdown:hover > #cart-dropdown{
  display: block;
}
   </style>
   <script>
    

/* JS */
// comportement du panier au survol pour affichage de son contenu
var timeout;

$('#cart').on({
  mouseenter: function() {
    $('#cart-dropdown').show();
  },
  mouseleave: function() {
    timeout = setTimeout(function() {
      $('#cart-dropdown').hide();
    }, 200);
  }
});

// laisse le contenu ouvert à son survol
// le cache quand la souris sort
$('#cart-dropdown').on({
  mouseenter: function() {
    clearTimeout(timeout);
  },
  mouseleave: function() {
    $('#cart-dropdown').hide();
  }
  /////////////////////////
  function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+d.toUTCString();
    
  // règle le pb des caractères interdits
  if ('btoa' in window) {
    cvalue = btoa(cvalue);
  }
    
  document.cookie = cname + "=" + cvalue + "; " + expires+';path=/';
}
////////////////////////#cartfunction saveCart(inCartItemsNum, cartArticles) {
  setCookie('inCartItemsNum', inCartItemsNum, 5);
  setCookie('cartArticles', JSON.stringify(cartArticles), 5);
}
////////////////////////////////////
function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c[0] == ' ') {
      c = c.substring(1);
    }
    
    if (c.indexOf(name) != -1) {
      if ('btoa' in window) {
        return atob(c.substring(name.length,c.length));
      }
      else {
        return c.substring(name.length,c.length);
      }
    }
  }
  return false;
}
    // variables pour stocker le nombre d'articles et leurs noms
    var inCartItemsNum;
    var cartArticles;
     
    // affiche/cache les éléments du panier selon s'il contient des produits
    function cartEmptyToggle() {
      if (inCartItemsNum > 0) {
        $('#cart-dropdown .hidden').removeClass('hidden');
        $('#empty-cart-msg').hide();
      }
      
      else {
        $('#cart-dropdown .go-to-cart').addClass('hidden');
        $('#empty-cart-msg').show();
      }
    }
     
    // récupère les informations stockées dans les cookies
    inCartItemsNum = parseInt(getCookie('inCartItemsNum') ? getCookie('inCartItemsNum') : 0);
    cartArticles = getCookie('cartArticles') ? JSON.parse(getCookie('cartArticles')) : [];
     
    cartEmptyToggle();
     
    // affiche le nombre d'article du panier dans le widget
    $('#in-cart-items-num').html(inCartItemsNum);
     
    // hydrate le panier
    var items = '';
    cartArticles.forEach(function(v) {
       items += '<li id="'+ v.id +'"><a href="'+ v.url +'">'+ v.name +'<br><small>Quantité : <span class="qt">'+ v.qt +'</span></small></a></li>';
    });
     
    $('#cart-dropdown').prepend(items);
    […]
     
    // click bouton ajout panier
    $('.add-to-cart').click(function() {
      
      // récupération des infos du produit
      var $this = $(this);
      var id = $this.attr('data-id');
      var name = $this.attr('data-name');
      var price = $this.attr('data-price');
      var weight = $this.attr('data-weight');
      var url = $this.attr('data-url');
      var qt = parseInt($('#qt').val());
      inCartItemsNum += qt;
      
      // mise à jour du nombre de produit dans le widget
      $('#in-cart-items-num').html(inCartItemsNum);
      
      var newArticle = true;
      
      // vérifie si l'article est pas déjà dans le panier
      cartArticles.forEach(function(v) {
        // si l'article est déjà présent, on incrémente la quantité
        if (v.id == id) {
          newArticle = false;
          v.qt += qt;
          $('#'+ id).html('<a href="'+ url +'">'+ name +'<br><small>Quantité : <span class="qt">'+ v.qt +'</span></small></a>');
        }
      });
      
      // s'il est nouveau, on l'ajoute
      if (newArticle) {
        $('#cart-dropdown').prepend('<li id="'+ id +'"><a href="'+ url +'">'+ name +'<br><small>Quantité : <span class="qt">'+ qt +'</span></small></a></li>');
        
        cartArticles.push({
          id: id,
          name: name,
          price: price,
          weight: weight,
          qt: qt,
          url: url
        });
      }
     
      // sauvegarde le panier
      saveCart(inCartItemsNum, cartArticles);
     
      // affiche le contenu du panier si c'est le premier article
      cartEmptyToggle();
    });
        // si on est sur la page ayant pour url monsite.fr/panier/
        if (window.location.pathname == '/panier/') {
      var items = '';
      var subTotal = 0;
      var total;
      var weight = 0;
      
      /* on parcourt notre array et on créé les lignes du tableau pour nos articles :
      * - Le nom de l'article (lien cliquable qui mène à la fiche produit)
      * - son prix
      * - la dernière colonne permet de modifier la quantité et de supprimer l'article
      *
      * On met aussi à jour le sous total et le poids total de la commande
      */
      cartArticles.forEach(function(v) {
        // opération sur un entier pour éviter les problèmes d'arrondis
        var itemPrice = v.price.replace(',', '.') * 1000;
        items += '<tr data-id="'+ v.id +'">\
                 <td><a href="'+ v.url +'">'+ v.name +'</a></td>\
                 <td>'+ v.price +'€</td>\
                 <td><span class="qt">'+ v.qt +'</span> <span class="qt-minus">–</span> <span class="qt-plus">+</span> \
                 <a class="delete-item">Supprimer</a></td></tr>';
        subTotal += v.price.replace(',', '.') * v.qt;
        weight += v.weight * v.qt;
      });
     
      // on reconverti notre résultat en décimal
      subTotal = subTotal / 1000;
      
      // On insère le contenu du tableau et le sous total
      $('#cart-tablebody').empty().html(items);
      $('.subtotal').html(subTotal.toFixed(2).replace('.', ','));
      
      // lorsqu'on clique sur le "+" du panier
      $('.qt-plus').on('click', function() {
        var $this = $(this);
        
        // récupère la quantité actuelle et l'id de l'article
        var qt = parseInt($this.prevAll('.qt').html());
        var id = $this.parent().parent().attr('data-id');
        var artWeight = parseInt($this.parent().parent().attr('data-weight'));
     
        // met à jour la quantité et le poids
        inCartItemsNum += 1;
        weight += artWeight;
        $this.prevAll('.qt').html(qt + 1);
        $('#in-cart-items-num').html(inCartItemsNum);
        $('#'+ id + ' .qt').html(qt + 1);
        
        // met à jour cartArticles
        cartArticles.forEach(function(v) {
            // on incrémente la qt
            if (v.id == id){
                v.qt += 1;
                
                // récupération du prix
                // on effectue tous les calculs sur des entiers
                subTotal = ((subTotal * 1000) + (parseFloat(v.price.replace(',', '.')) * 1000)) / 1000;
            }
        });
        
        // met à jour la quantité du widget et sauvegarde le panier
        $('.subtotal').html(subTotal.toFixed(2).replace('.', ','));
        saveCart(inCartItemsNum, cartArticles);
      });
      
      // quantité -
      $('.qt-minus').click(function() {
        var $this = $(this);
        var qt = parseInt($this.prevAll('.qt').html());
        var id = $this.parent().parent().attr('data-id');
        var artWeight = parseInt($this.parent().parent().attr('data-weight'));
     
        if (qt > 1) {
          // maj qt
          inCartItemsNum -= 1;
          weight -= artWeight;
          $this.prevAll('.qt').html(qt - 1);
          $('#in-cart-items-num').html(inCartItemsNum);
          $('#'+ id + ' .qt').html(qt - 1);
          
          cartArticles.forEach(function(v) {
              // on décrémente la qt
              if (v.id == id) {
                  v.qt -= 1;
                  
                  // récupération du prix
                  // on effectue tous les calculs sur des entiers
                  subTotal = ((subTotal * 1000) - (parseFloat(v.price.replace(',', '.')) * 1000)) / 1000;
              }
          });
          
          $('.subtotal').html(subTotal.toFixed(2).replace('.', ','));
          saveCart(inCartItemsNum, cartArticles);
        }
      });
      
      // suppression d'un article
      $('.delete-item').click(function() {
        var $this = $(this);
        var qt = parseInt($this.prevAll('.qt').html());
        var id = $this.parent().parent().attr('data-id');
        var artWeight = parseInt($this.parent().parent().attr('data-weight'));
        var arrayId = 0;
        var price;
        
        // maj qt
        inCartItemsNum -= qt;
        $('#in-cart-items-num').html(inCartItemsNum);
        
        // supprime l'item du DOM
        $this.parent().parent().hide(600);
        $('#'+ id).remove();
        
        cartArticles.forEach(function(v) {
            // on récupère l'id de l'article dans l'array
            if (v.id == id) {
                // on met à jour le sous total et retire l'article de l'array
                // as usual, calcul sur des entiers
                var itemPrice = v.price.replace(',', '.') * 1000;
                subTotal -= (itemPrice * qt) / 1000;
                weight -= artWeight * qt;
                cartArticles.splice(arrayId, 1);
                
                return false;
            }
            arrayId++;
        });
        
        $('.subtotal').html(subTotal.toFixed(2).replace('.', ','));
        saveCart(inCartItemsNum, cartArticles);
        cartEmptyToggle();
      });
    }
    function b64EncodeUnicode(str) {
	return btoa( unescape( encodeURIComponent( str ) ) );
}

function b64DecodeUnicode(str) {
	return decodeURIComponent( escape( atob( str ) ) );
}
if ('btoa' in window) {
    cvalue = b64EncodeUnicode(cvalue);
  }

if ('btoa' in window) {
   return decodeURIComponent( escape( atob(c.substring(name.length,c.length))));
}
/*
php
$cookie_comm = $_COOKIE["cartArticles"];
$removebase64 = base64_decode($cookie_comm);
$commande_arr = json_decode($removebase64, true);
*/
});
   </script>