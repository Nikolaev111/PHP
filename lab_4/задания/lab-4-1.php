<title>Николаев</title>
<?php
$treug = array();
$kvd = array();
$n = 0;
$n1 = 0;
$n2 = 0;
$rez = array();
while ($n <= 10) {
    $res = ($n * ($n + 1)) / 2;
    $treug[$n] = $res;
    $n++;
}

while ($n2 <= 10){
    $kvd[$n2] = $n2*$n2;
    $n2++;
}

while ($n1 <= 10) {
    echo "treug[$n1] = " . $treug[$n1] . '; ';
    $n1++;
}

$n1 = 0;
echo "<br>";

while($n1 <= 10) {
    echo "kvd[$n1] = " . $kvd[$n1] . '; ';
    $n1++;
}

$rez = array_merge($treug, $kvd);
sort($rez);
echo "<br>";
echo "<br>";
var_dump($rez);
echo "<br>";
echo "<br>";
unset($rez[0]);
var_dump($rez);
echo "<br>";
echo "<br>";
$rez1 = array_unique($rez);
var_dump($rez1);
?>