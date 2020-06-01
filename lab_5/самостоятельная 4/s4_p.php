
<?php


switch ($_POST["log"]){

	case 'Alex1':
	$c = "Добро пожаловать Alex1";
	break;
	case 'Alex2':
	$c = "Добро пожаловать Alex2";
	break;
	case 'Alex3':
	$c = "Добро пожаловать Alex3";
	break;
	case 'Alex4':
	$c = "Добро пожаловать Alex4";
	break;
	default: $c= "Вы не зарегестрированы!"; break;
}


echo "<hr>";

echo "Ответ " . $c;
echo "<hr>";
echo " <a onclik=\"history.back(); return false;\">Вернуться назад </a>";


?>