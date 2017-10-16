
<select class="form-control" id="lstRayons">
           <?php 
              foreach ($lesRayons as $rayons){
               echo"<option value='".$rayons->numR."'>".$rayons->nomR."</option>";
             }
       
           ?>   
</select>
