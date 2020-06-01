<html>
<head>
<meta charset="UTF-8" />
<title>Николаев</title>
</head>

<body>
<?php

echo "Дана матрица А(m,n). Найти вектор В(n), каждый элемент которого равен сумме элементов соответствующего столбца матрицы А. Исходный и скорректированный массивы вывести на экран.";
echo "<br>";

$array1 = array();
$array2 = array();
$a = 0;
$b = 0;
$n = 0;
$n2 = 0;

while($n<10){
    $array1[$n] = rand(-50,50);
    $n++;
}

$n = 0;

while($n<10){
    $array2[$n] = rand(-50,50);
    $n++;
}

$complexarray = array($array1, $array2);
var_dump($complexarray);
$n = 0;
echo "<br>";
echo "<table>";

while($n<10){
    echo "<tr>";
    echo "<td>" . $complexarray[$n2][$n] . "</td>";
    echo "<td>" . $complexarray[$n2+1][$n] . "</td>";
    echo "</tr>";
    $n = $n + 1;
}


echo "</table>";
echo "<br>";
$n = 0;
while($n<10){
$a = $a + $complexarray[$n2][$n];
$n++;
}

$n = 0;
while($n<10){
    $b = $b + $complexarray[$n2+1][$n];
    $n++;
    }
echo "<table>";
echo "<tr><td>" . $a . "</td><td>" . $b . "</td></tr>";
echo "</table>";
?>
</body>
</html>