//autocolete///
$('#recherche').autocomplete({
    
        source : function(requete, reponse){ // les deux arguments représentent les données nécessaires au plugin
    
        $.ajax({
                url : 'autocmplete.php', // on appelle le script JSON
                dataType : 'json', // on spécifie bien que le type de données est en JSON
                data : {
                     name_startsWith : $('#recherche').val(), // on donne la chaîne de caractère tapée dans le champ de recherche
                     maxRows : 15 //le nombre de ligne    
                    },
                success : function(donnee){
    
                    reponse($.map(donnee.montab, function(objet){
    
                        return objet.name + ', ' + objet.countryName; // on retourne cette forme de suggestion
    
                    }));
    
                }
    
            });
    
        }
    
    });
    ///fin//
    /////cookies