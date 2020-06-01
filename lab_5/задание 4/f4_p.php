<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";

$ans = "Сумма ";
$z = "+";
$c = 0;
if ($_POST["d"] == "plus")
     {
     $c = $_POST["a"] + $_POST["b"];
     
     }

else
{
 $c = $_POST["a"] * $_POST["b"];
     $ans = " Произведение";
     $z = "*";
}

if (!isset($_POST["f"])){
	echo "$ans чисел <br>" . $_POST["a"] . " $z " . $_POST["b"] . " = $c";
}
else{
	echo "$ans чисел равно $c";
}
echo "<hr>";
echo " <a onclik=\"history.back(); return false;\">Вернуться назад </a>";
?>