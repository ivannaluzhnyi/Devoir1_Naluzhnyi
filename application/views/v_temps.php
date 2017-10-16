<?php
$totals=0;
foreach ($lesTempsTotal as $total){
    $totals+=$total->temps;
}
echo $totals;