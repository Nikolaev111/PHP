<?php
$s3 = ($_POST["f"] . " " . $_POST["n"]);
$s4 = ". Мы рады приветствовать вас на нашем сайте.";
switch ($_POST["z"]){

	case 1:
	$s1 = "Уважаемый ";
	$s2 = "господин ";
	break;
	case 2:
	$s1 = "Уважаемый ";
	$s2 = "госпожа ";
	break;
	case 3:
	$s1 = "Уважаемый ";
	$s2 = "товарщ ";
	break;
}

echo $s1 . $s2 . $s3 . $s4;
echo "<hr>";
$s5 = ($_POST["comment"]);
echo $s5;
echo "<hr>";

echo " <a onclik=\"history.back(); return false;\">Вернуться назад </a>";


?>