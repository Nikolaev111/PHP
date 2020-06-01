<title>Николаев</title>
<?php
$n = rand(3,20);
$n1 = 0;
$massiv = array();
$rez = 0;
$count = 1;

while($n1<$n){
$massiv[$n1] = rand(10,99);
$n1++;
}

echo "Массив из ". $n . " элементов, заполненный случайными числами: ";
$n1 = 0;
while($n1<$n){
    echo $massiv[$n1] . " ";
    $n1++;
}

echo "<br>";
sort($massiv);
echo "Массив в отсортированном виде: ";
$n1 = 0;
while($n1<$n){
    echo $massiv[$n1] . " ";
    $n1++;
}

echo "<br>";
$massiv = array_reverse($massiv);
echo "Элементы массива в обратном порядке: ";
$n1 = 0;
while($n1<$n){
    echo $massiv[$n1] . " ";
    $n1++;
}
echo "<br>";

array_pop($massiv);
echo "Массив после удаления последнего элемента: ";
$n1 = 0;
while($n1<$n && isset($massiv[$n1])){
    echo $massiv[$n1] . " ";
    $n1++;
}
echo "<br>";

echo "Сумма элементов массива: ";
$n1 = 0;
while($n1<$n && isset($massiv[$n1])){
    $rez = $rez + $massiv[$n1];;
    $n1++;
    $count++;
}

echo $rez . "<br>";
echo "Колличество элементов массива: " . $count . "<br>";
echo "Среднее арифмитическое: " . $rez/$count . "<br>";

if(in_array(50, $massiv) == true){
    echo "50 содержится в массиве.";
} else{
    echo "50 не содержится в массиве.";
}

echo "<br>";
array_unique($massiv);
echo "Уникальный массив: ";
$n1 = 0;
while($n1<$n && isset($massiv[$n1])){
    echo $massiv[$n1] . " ";
    $n1++;
}
?>