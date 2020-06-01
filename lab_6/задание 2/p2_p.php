<?php

$plus = '+';
if (strpos($_POST["f"], $plus) !== false) {
  echo 'В выражении есть знак сложения: '.$plus;
}

$munys = '-';
if (strpos($_POST["f"], $munys) !== false) {
  echo '</br>В выражении есть знак вычитания: '.$munys;
}

$ymn = '*';
if (strpos($_POST["f"], $ymn) !== false) {
  echo '</br>В выражении есть знак умножения: '.$ymn;
}

$del = '/';
if (strpos($_POST["f"], $del) !== false) {
  echo '</br>В выражении есть знак деления : '.$del;
}

?>