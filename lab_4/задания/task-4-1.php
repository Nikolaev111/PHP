<title>Николаев</title>
<?php
$n = 1;
$n2 = 1;
$n3 = 0;
$i = 0;
$massiv = 0;
$numbers = array();
$array1 = array();
$max = 0;
$count = 0;
$option = 0;

while ($n <= 10){
    $a = rand(-30,30);
    $array1[$n] = $a;
    $n++;
    $max++;
}
var_dump($array1);
echo "<br>";

while($n2 <= 10){
    $n3 = $array1[$n2];
    if($n3 > 0){
        $i++;
    }else{

    }

if($i > $max && $array1[$n2+1] > 0){
    $max++;
    $numbers[] = $max;
    $n2++;
    $i++;
} else{
    $n2++;
    $i = 0;
    $max=0;
}
}

$result = max($numbers) + 1;
echo $result;
?>