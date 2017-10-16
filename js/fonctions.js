function AfficherRayons(numSecteur){
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_Accueil/afficherRayons",
         data:"numSecteur="+numSecteur,
        success:function(data)
                {
                    $('#idRayons').empty();
                    $('#idRayons').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recuperer");
                }
  
            }        
    );
}

function AfficherEmployes(numR){
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_Accueil/AfficherEmployes",
         data:"numR="+numR,
        success:function(data)
                {
                    $('#idEmployes').empty();
                    $('#idEmployes').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recuperer");
                }
  
            }        
    );
}

function test(){
    alert("test");
}

//Afficher nombre total <-
function AfficherTemps(numR){
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_Accueil/AfficherTempsTotal",
         data:"numR="+numR,
        success:function(data)
                {
                    $('#tempsTotal').empty();
                    $('#tempsTotal').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recuperer");
                }
  
            }        
    );
}


function AfficherEmployesSel(numR){
    //alert("test");
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_Accueil/AfficherEmployesSel",
         data:"numR="+numR,
        success:function(data)
                {
                    $('#ajoutTemps').empty();
                    $('#ajoutTemps').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recuperer");
                }
  
            }        
    );
}