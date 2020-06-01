<?php

$matrix = array();

$n = 14;
$m = 15;

for ($i = 0; $i < $m; $i++) {
    $str = array();
    for ($w = 0; $w < $n; $w++) {
        $str[] = rand(1, 9);
    }
    $matrix[] = $str;
}
echo "<pre>";
var_dump($matrix);
echo "</pre>";

for ($i = 0; $i < $m; $i++) {
    for ($w = 0; $w < $n; $w++) {
        echo $matrix[$i][$w] . " ";
    }
    echo "<br>";
}