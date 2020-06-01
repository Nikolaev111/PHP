<html>
<head>
<meta charset="UTF-8" />
<title>Николаев</title>
</head>

<body>
<?php

$matrix = array();

$z = 0;
$f = 0;
$n = 9; //x
$m = 10; //y
$b = 0;
$d = 0;
$check = 0;
$option = 0;
$array1 = array();

echo "Дана матрица А(m,n). Найти вектор В(n), каждый элемент которого равен сумме элементов соответствующего столбца матрицы А. Исходный и скорректированный массивы вывести на экран.";
echo "<br>";

for ($i = 0; $i < $m; $i++) {
    $str = array();
    for ($w = 0; $w < $n; $w++) {
        $str[] = rand(1, 9);
    }
    $matrix[] = $str;
}
echo "<pre>";
//var_dump($matrix);
echo "</pre>";

for ($i = 0; $i < $m; $i++) {
    for ($w = 0; $w < $n; $w++) {
        echo $matrix[$i][$w] . " ";
    }
    echo "<br>";

}

echo "<br>";


while($option != 1){
    if($z<$m && isset($matrix[$z][$d])){
    $f = $f + $matrix[$z][$d];
    $z++;
    }
    else{
echo $f . " ";
$f = 0;
$d++;
$z = 0;
    }

    if($d>=$n){
        $option = 1;
    }
    else{}
}


?>
</body>
</html>