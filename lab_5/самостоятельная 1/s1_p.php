<?php




if ($_POST["a"] > $_POST["b"])
     {
     echo "Большее число " . $_POST["a"];     
     }

else if ($_POST["a"] < $_POST["b"])
{
 $c = $_POST["a"] * $_POST["b"];
    echo "Большее число " . $_POST["b"]; 
}

else{
	echo "числа равны";
}
echo "<br>";
echo " <a onclik=\"history.back(); return false;\">Вернуться назад </a>";
?>