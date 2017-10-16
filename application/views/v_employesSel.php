<select id="selEmp">
    <?php 
    foreach ($lesEmployesSel as $sel){
        ?>
    <option value="<?php $sel->numE ?>"><?php echo $sel->prenomE; ?></option>
        
    <?php     
    }
    
    ?>
    
   
</select>


