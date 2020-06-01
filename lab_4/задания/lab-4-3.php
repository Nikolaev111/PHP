<title>Николаев</title>
<?php
$cust = array();
$cust['cnum'] = 2001;
$cust['cname'] = "Hoffman";
$cust['city'] = "London";
$cust['snum'] = 1001;
$cust2 = $cust;
$cust3 = $cust;


$cust['rating'] = 100;
var_dump($cust);
echo "<br>";
asort($cust2);
var_dump($cust2);
echo "<br>";
ksort($cust3);
var_dump($cust3);
echo "<br>";
sort($cust);
var_dump($cust);
?>