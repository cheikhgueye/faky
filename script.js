

//prod by kheuch//*****/


 
$(document).ready(function(){
                       
$('#for').on('submit',function(){
  //la recherche **kheuche**
    
  $('#r').html('')
   $.ajax({type:"POST", data:$(this).serialize(), url:"search.php", dataType: 'json',
  
  success: function(data){
  afficheProd(data)
    
 },
 });
 return false;
 })
 var panier = [];
    $('#r').on('click','.achat',function(){
       $('.et').html(Number($('.et').html())+1);
        $('table').append( '<tr><td ><img src="'+$(this).attr('title')+'" class="png"/></td><td class="total">'+$(this).attr('value')+'<td></tr>')
        })
      
        $('.s').on('click',function(){
          var total=0
          $.each($('.total'),function(){
        
              total=  total+Number($('.total').html())
          
          })
         
          $('table').append( '<tr><td colspan="3" class="u" > prix totale d achat:'+total+'cfa</td></tr>')
         
      
        
        })
       
     
      
      $('#alert').hide()
      $('.y').hide();
      $('.z').hide();
  
      
      $('.lien').on('click',function(){
        if($(this).attr('id')=='mo'){
          $('.y').show();
      $('.x').hide()
        }
        else{
          $('.z').show();
      $('.x').hide()

        }
      })
      $('.alr').hide()
      function inscription(idform){
      
            $("#"+idform).on('submit',function(){
              $('.alr').html('')
       
                $.ajax({type:"POST", data: $(this).serialize(), url:"insert.php", dataType: 'text',
                 
                 
      
                success: function(data){
                  if(data=='existe'){
                 
                  
                    $('.alr').show()
                    $('.alr').html('<h1>ce login exixte deja!!!<h1>');                
                 
                 
                   setTimeout(() => {
                      $('.alr').hide()
                     
                    
                   }, 5000);
                    
                    
                    
                  }else if(data=='ajoute'){

                    $('.alr').show()
                    $('.alr').attr('class','alert alert-success alr').html('<h1>INSCRIPTION VALIDE!!!<h1>'); 
                    
                 
                   setTimeout(() => {
                      $('.alr').hide()
                     
                    
                   }, 5000);
                  }
      
                        },
                     
                     
                
                });
                               

                return false;
             
        }) }
      
          function connexion(idform){
            $('.alr').html('')
            $("#"+idform).on('submit',function(){

          
                   $.ajax({type:"POST", data: $(this).serialize(), url:"connect.php", dataType: 'json',
                    

                   success: function(data){
           
                     $("body").load('accueil.php?nom='+data[0].nom);
                   
                    if(data=='erreur'){
                      $('.alr').show()
                      $('.alr').html('<h1>login ou mot de passe incorrect!!!<h1>');
                  
                   
                   
                     setTimeout(() => {
                        $('.alr').hide()
                       
                      
                     }, 5000);

                    }
          
                       },
         
                    
                   
                   });
                                  
   
                   return false;
                
               })}

 
        

      function categoriser(li){
        //afficher les sous categories
           
              
$(function(){
   $.ajax({type:"POST", data:'', url:"scat.php?p="+li.attr('id'), dataType: 'json',
      success: function(data){
         $.each(data,function(){
           $('.ca').append('<li id="'+this.id+'" class="btn primary">'+this.nom+'</li> <hr> </hr>') })
 },
  });
                  return false;
})
           }

        

function produits(sous_categorie){
               
$(function(){
  $.ajax({type:"POST", data:'', url:"produit.php?p="+sous_categorie.attr('id'), dataType: 'json',
     success: function(data){
      $.each(data,function(){
         afficheProd(this)
    
       })





},
});
return false;
})


}
$('.ca').on('click','li',function(){
  $('#r').html('')
   produits($(this))
  
  
})
$('#co').on('click','li',function(){
  $('.ca').html('')
  $('#r').empty()
categoriser($(this))
produit($(this))

})
           connexion('formConnexion')//appel da la fonction connexion
             validForm('formConnexion')
              validForm('finscription')
                validForm('mo_de_passe')
             
   
          function ver(champ){
            if(champ.val()==''){
              return 'veillez saisir le '+' '+champ.attr('val-champ');
            }else{
              return ''
            }
          }
     var error=[] //creation de tableau vide
     $("#alog").on("click",function(){
       if($('#clog').val()!='' && $('#cpas').val()!=''){
         $('.x').hide()
        $("#h").load('page.php');
       }
            
       $("#finscription").submit(function(){
        $.ajax({type:"POST", data: $(this).serialize(), url:"page.php",
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
   
     function alphaN(str){
       var resultat = /^[0-9a-zA-Z]+$/.test(str.val());
        if(resultat==true){
          return ''
        }
        else{
          return 'le login doit etre en caractere alphanumerique!!'
        }
       
       } 
      function validForm(idform){
        
       var error=[] //creation de tableau vide
      
          $("#"+idform).on('submit',function() {
          
           jQuery.each($("#"+idform+' '+'input:text'),function(){
                error.push(ver($(this)))  
               
           });
           error.push(alphaN($("#"+idform+' '+'.log')))


      var  c=0;
      error.forEach(e => {
        if(e!==''){
          $('.alr').html('')
        $('.alr').show()
        $('.alr').append('<li>'+e+'</li>');
       c++;
       }})
       if(c==0){
         alrt(c)
        inscription('finscription')
        connexion('formConnexion')

       }
       setTimeout(() => {
          $('.alr').hide()
         
        
       }, 5000);
         })
        
      }
     

    
      
      
      $(function(){
       // affichage des gategories
              $.ajax({type:"POST", url:"categories.php", dataType: 'json',
              
             
             success: function(data){
          
           $.each(data,function(){
        
         
            $('#co').append('<li id='+this.id+' class="btn primary cate" >'+this.nom+'</li> ')

       
        

        })  
             
            
           
    
    
      },
  });
         return false;
        })
        $(function(){
          //afffichage des sous categories
                 $.ajax({type:"POST", url:"scat.php?p="+1, dataType: 'json',
                 
                
                success: function(data){
               
              $.each(data,function(){
        
             
               $('.ca').append('<li id='+this.id+' class="btn primary ">'+this.nom+'</li> ')
   
               
               
   
           })  
                
               
              
       
       
         },
     });
            return false;
          
           })
           $(function(){
           //affichage des produits
          $.ajax({type:"POST", url:"pardefaut.php", dataType: 'json',
                   
                  
               
 success: function(data){
  $.each(data,function(){
    afficheProd(this)
        
   } )
 
    
         
           },
       });
              return false;
            
             })

             ////////////////////

function produit(x){
  //affichage des des produits lors d un clic sur un sous-categorie***xeush**
$(function(){
$.ajax({type:"POST", data:'', url:"prod_cat_clic.php?p="+x.attr('id'), dataType: 'json',
    success: function(data){
     $.each(data,function(){
        afficheProd(this)})
},
});
return false;
})}
  

$('#recherche').autocomplete({
  //autocomlete
      source : 'autocomplete.php',
   
      
   
  });
  $('#cherche').autocomplete({
    //autocomlete
        source : 'autocomplete.php',
     
        
     
    });
   
 
    function afficheProd(x){
   //creer une fonctions afficheProd qui affiche les produits 
$('<div>',{
class:"col-md-3 panier",id:x.nom,
  }).appendTo($('#r'))
    $('<div>',{
      class:"card prod  scale", id:'a'+x.id}).appendTo($('#'+x.nom))
       $('<img>',{
         src:x.id_sous_cat+"/"+x.image,class:'btn imgs'}).appendTo($('#a'+x.id))
          $('<div>',{
            class:"card-body"}).appendTo($('#'+x.id))
              $('<h4>',{
               class:"Nom",text:x.nom}).appendTo($('#a'+x.id))
                $('<h4>',{
                 class:"prix",text:x.prix_unitaire+'frcfa'}).appendTo($('#a'+x.id))
                  $('<h4>',{
                   class:"achat btn primary",text:'acheter',name:x.nom,value:x.prix_unitaire,title:x.id_sous_cat+"/"+x.image}).appendTo($('#a'+x.id))
           
          }
 

          function Produit(){
            //affichage des des produits lors du load
          $(function(){
          $.ajax({type:"POST", data:'', url:"produits.php", dataType: 'json',
              success: function(data){
               $.each(data,function(){
                $('#table').append( '<tr><td ><h2 class="btn btn-primary">'+this.nom+'</h2></td>'+'<td>'+1+
                '</td><td  ><h4 class="btn btn-primary">'+this.prix_unitaire+'frcfa</h4></td><td>'+'<img src="'+this.id_sous_cat+"/"+this.image+'" class="png "></td>'+'<td  class="btn btn-info detail "  id="'+this.id_sous_cat+'" > <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalt">details</button>'+
                '</td></tr>')
              })
          },
          });
          return false;
          })}
 $('#table  .det').hide()
          function Details(produit){
          $(function(){
          $.ajax({type:"POST", data:'', url:"details.php?id="+produit.attr('id'), dataType: 'json',
              success: function(data){
         
             $('#tabs-1').html('<h4> categorie:'+data[0].categorie+'<h4>')
             $('#tabs-1').append('<h4> nombre de sous-categories:'+data[0].nbSousCat+'<h4>')
             
             $('#tabs-2').html('<h4> sous_categorie:'+data[0].sous_cat+'<h4>')
             $('#tabs-2').append('<h4>nombre de produit:'+data[0].nbProduit+'<h4>')
             
          },
          });
          return false;
          })}


          $('#table').on('click','.detail',function(){
                    Details($(this))
                    $(function() {
                      $("#dialog").dialog({
                        autoOpen: false
                      });
                      
                      $("#dialaog").dialog("open");
                    
                    });
            
          })

          $(function() {
            //ui
                $('#onglets').tabs();
            
              });   
      $('#lin').on('load',Produit())



      /////////////////////
       
              $('#cat').on('change',function(){
                //la recherche **kheuche**
               
                $.ajax({type:"POST", data:$(this).serialize(), url:"ateliers.php", dataType: 'json',
                success: function(data){
                  $('#sc').html('')
                 $.each(eval(data),function(key,val){
                
                   $('#sc').append('<option value='+val.id+'>'+val.nom+'</option>')
                })
            },
               });
               return false;
               })

            
              
        $("#cherche").on('keyup',function(){
         var val= $("#cherche").val()
     
            $.ajax({type:"POST", data:'', url:"xhe.php?val="+val, taType: 'json',
                success: function(data){
                  $('#table').html('')
                  $.each(eval(data), function(key, val){

                    $('#table').append( '<tr><td >'+val.nom+'</td>'+'<td>'+1+
                    '</td><td>'+val.prix_unitaire+'frcfa</td><td>'+'<img src="'+val.id_sous_cat+"/"+val.image+'" class="png"></td>'+'<td  class="btn btn-info detail "  id="'+val.id_sous_cat+'">  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalt">Details</button>'
                   +'</td>'+'</tr>')
                  })
               
            },
            });
            return false;
        
          

        })
     
        $('.submit').on('click',function(){ 
          //inserer produits
          var nom=$('#nom').val()
          var pu=$('#pu').val()
          var img=$('#img').val().substr(12, 16)
          var cate=$('#cat').val()
          var scate=$('#sc').val()
        var produit=[nom,pu,img,cate,scate]
        var c=0
        $.each(eval(produit),function(){
          if(this==""){
           
            c++
          }
        })
      if(c==0){
        $(function(){
          $.ajax({type:"POST",
           data: {"produit":produit} ,
            url:"atelier.php", dataType: 'text',
              success: function(data){
                 if(data='ok'){
                  Produit()
                  $(".als").show()
                }
                 
          },
          });
      
          })
      }
      else{
        $('.alert').html('veuillez remplir tous les champs!')
        $('.alert').show()
        
      }
        console.log(produit)
       
         return false
        }) 
        
          
      $(function(){
        // option des gategories
               $.ajax({type:"POST", url:"categories.php", dataType: 'json',
               
              
              success: function(data){
                $('#cat').html('')
        $('#cat').append('<option value="" class="btn primary cate" ></option> ')
                
            $.each(data,function(){
         
          
             $('#cat').append('<option value='+this.id+' class="btn primary cate" >'+this.nom+'</option> ')
 
        
         
 
         })  
              
             0
            
     
     
       },
   });
          return false;
         })
         $('.alert').hide()
         $(".als").hide()
});

    