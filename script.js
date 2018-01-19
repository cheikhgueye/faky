




 
    $(document).ready(function(){
      var  tabuser=[]
         
        
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
            $("#"+idform).on('submit',function(){
              
          
                   $.ajax({type:"POST", data: $(this).serialize(), url:"connect.php", dataType: 'json',
                    
                  
         
                   success: function(data){
                 
                   //   $('.x').hide()
                     $("#h").load('accueil.php?nom='+data[0].nom);
                  
                    
                     
                     
                

                 
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
          
    
        
      
    
           inscription('finscription')
          connexion('formConnexion')//appel da la fonction connexion
        
       
      
    
     
         /*   validForm('formConnexion')
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
        $('.alr').show()
        $('.alr').append('<li>'+e+'</li>');
       c++;
       }})
       if(c==0){
        inscription('finscription')
        connexion('formConnexion')

       }
       setTimeout(() => {
          $('.alr').hide()
         
        
       }, 5000);
         })
        
      }
     

    
      */
      
    });
   