
<?php


$t = $_POST["b"];

foreach (range(1,$t) as $v) {
        if ($_POST["z"] == "1")
     {
     if($v % 2 !== 1){
            echo $v." , ";
        }
     
     }
     else if($_POST["z"] == "2"){
     	if($v % 2 !== 0){
            echo $v." , ";
        }
     }

       else if($_POST["z"] == "3"){
     	if($v / 1 == 0 || $v / $v == 1){
            echo $v." , ";
        }
     }
    }
?>

