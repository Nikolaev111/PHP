<?php

$rows = 10; 
$cols = 10; 

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=10; $td<=100; $td+=10){
        echo '<td>'. $tr*$td .'</td>';
    }
    echo '</tr>';
}

echo '</table>';

?>