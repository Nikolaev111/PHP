<?php
echo "Исходное предложение: ";
$s5 = ($_POST["comment"]);
echo $s5;
echo "<hr>";
echo "Измененное предложение: ";
$t = $_POST["f"];
$format=str_replace($t,"",$s5);
echo $format;
echo "<hr>";



?>