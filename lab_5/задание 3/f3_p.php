<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";

$ans = "-";
if ($_POST["d"] == "plus")
     {
     $c = $_POST["a"] + $_POST["b"];
     $ans = " Сумма чисел: $c";
     }

else
{
 $c = $_POST["a"] * $_POST["b"];
     $ans = " Произведение чисел $c";
}

echo $ans;
echo "<hr>";
echo " <a onclik=\"history.back(); return false;\">Вернуться назад </a>";
?>