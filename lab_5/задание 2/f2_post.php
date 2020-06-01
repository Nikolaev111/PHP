<?php
echo " Здравствуйте , " .$_POST["username"];
echo "<hr>";

echo "Значение скрытого поля hidefild: " . $_POST["hiden_post"];
echo "<hr>";

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";

echo "<a onclick=\"historu.back(); return false;\">Вернуться назад </a>";
?>