<select class="form-control" id="selEmp">
    <?php 
    foreach ($lesEmployesSel as $sel){
        ?>
    <option value="<?php echo $sel->numE; ?>"><?php echo $sel->prenomE; ?></option>
         <?php     
    }
    
?>    
</select>
<input name="date" type="date"  class="form-control" value="<?php echo $sel->date; ?>">
<input name="temps" type="text"  class="form-control" value="<?php echo $sel->temps; ?>">


