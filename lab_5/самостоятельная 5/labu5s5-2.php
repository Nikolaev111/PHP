<?php
if (isset($_POST["v1"])) {(int) $v1 = $_POST["v1"];}
if (isset($_POST["v2"])) {(int) $v2 = $_POST["v2"];}
if (isset($_POST["v3"])) {(int) $v3 = $_POST["v3"];}
if (isset($_POST["v4"])) {(int) $v4 = $_POST["v4"];}
if (isset($_POST["v5"])) {(int) $v5 = $_POST["v5"];}
if (isset($_POST["v6"])) {(int) $v6 = $_POST["v6"];}
if (isset($_POST["v7"])) {(int) $v7 = $_POST["v7"];}
if (isset($_POST["v8"])) {(int) $v8 = $_POST["v8"];}
if (isset($_POST["v9"])) {(int) $v9 = $_POST["v9"];}
if (isset($_POST["v10"])) {(int) $v10 = $_POST["v10"];}
if (isset($_POST["v11"])) {(int) $v11 = $_POST["v11"];}
if (isset($_POST["v12"])) {(int) $v12 = $_POST["v12"];}
if (isset($_POST["v13"])) {(int) $v13 = $_POST["v13"];}
if (isset($_POST["v14"])) {(int) $v14 = $_POST["v14"];}
if (isset($_POST["v15"])) {(int) $v15 = $_POST["v15"];}
if (isset($_POST["v16"])) {(int) $v16 = $_POST["v16"];}
if (isset($_POST["v17"])) {(int) $v17 = $_POST["v17"];}
if (isset($_POST["v18"])) {(int) $v18 = $_POST["v18"];}
if (isset($_POST["v19"])) {(int) $v19 = $_POST["v19"];}
if (isset($_POST["name"])) {$name = $_POST["name"];}
$sum = (int) $v1 + (int) $v2 + (int) $v3 + (int) $v4 + (int) $v5 + (int) $v6 + (int) $v7 + (int) $v8 + (int) $v9 + (int) $v10 + (int) $v11 + (int) $v12 + (int) $v13 + (int) $v14 + (int) $v15 + (int) $v16 + (int) $v17 + (int) $v18 + (int) $v19;
echo $name . ", вот ваши результаты:" . "<hr>";
echo "Колличество балов " . $sum;
echo "<br>";
if ($sum >= 15) {echo "У Вас покладистый характер" . "<br>";} elseif ($sum >= 8 && $sum < 15) {echo "Вы не лишены недостатков, но с вами можно ладить" . "<br>";} elseif ($sum < 8) {echo "Вашим друзьям можно посочувствовать" . "<br>";}
