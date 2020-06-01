
<?php


switch ($_POST["z"]){

	case 1:
	$c = $_POST["a"] + $_POST["b"];
	break;
	case 2:
	$c = $_POST["a"] * $_POST["b"];
	break;
	case 3:
	$c = $_POST["a"] / $_POST["b"];
	break;
	case 4:
	$c = $_POST["a"] - $_POST["b"];
	break;
}


echo "<hr>";

echo "Ответ " . $c;
echo "<hr>";
echo " <a onclik=\"history.back(); return false;\">Вернуться назад </a>";


?>