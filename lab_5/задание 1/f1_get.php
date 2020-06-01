<?php
echo "Здравствуйте , " . $_GET["username"];
echo "<hr>";

echo "Pyfxtybt скрытого поля hideField : " . $_GET["hidden_input"];
echo "<hr>";

echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<hr>";

echo " <a onclik=\"history.back(); return false;\">Вернуться назад </a>";
	?>