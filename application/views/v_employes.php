<table class="table">
<tr>
    <th>Prenom Employe</th>
    <th>Date </th>
    <th>Temps</th>
</tr>

<?php
foreach ($lesEmployes as $employes){
    
    echo "<tr><td>".$employes->prenomE."</td><td>".$employes->date."</td><td>".$employes->temps."</td></tr>";
    
//     echo $employes->prenomE." ";
//     echo $employes->date." ";
//     echo  $employes->temps." ";
//     echo"<br>";
}
?>
    
</table>
