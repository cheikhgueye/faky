$(document).ready(function(){
    $('.bo').on('click',function(){
        var error=['']
        jQuery.each($('#fi input:text,input:password'),function(){
            if($(this).val()==''){
                return 'champ obligatoire'
    
            }
           
        })
   
        
    })
 

})