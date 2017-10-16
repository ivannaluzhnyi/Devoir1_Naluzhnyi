<html>
    <head>
        <title>Devoir 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>js/fonctions.js"></script>
    <script type="text/javascript">
            $(
                    function(){
                        $('#lstSecteurs').change(
                                function(){
                                    AfficherRayons($(this).val());
                                }) ;  
                   
                        $('#idRayons').change(
                                function(){
                                   AfficherEmployes($('#lstRayons').val());
                                 // test();
                                }) ;
                         $('#idRayons').change(
                                function(){
                                   AfficherTemps($('#lstRayons').val());
                                 // test();
                                }) ;
                   
            }
            );
            
        </script>
    </head>
    <body>
        <div class="container">
            
            <h3>Listes des secteurs</h3>
        <select class="form-control" id="lstSecteurs">
           <?php 
              foreach ($lesSecteurs as $lesSecs){
               echo"<option value='".$lesSecs->numS."'>".$lesSecs->nomS."</option>";
             }
       
           ?>   
        </select>
            <h3>Listes des rayons</h3>
            <div id="idRayons">
                    <select class="form-control" id="lstRayons">
                         <?php 
                                foreach ($lesRayons as $rayons){
                                       echo"<option value='".$rayons->numR."'>".$rayons->nomR."</option>";
                                 }
                          ?>   
                    </select>
            </div>
            
            <h3>Listes des Employe</h3>
            <div id="idEmployes" style="width: 450px; float: left; margin-right: 50px;"></div>
            
            <h3>Temps total</h3>
            <div id="tempsTotal"></div>
        </div>
    </body>
</html>
