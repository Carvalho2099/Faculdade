<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1>soma dos numeros pares</h1>
<?php

$arr = array(1,2,3,4,5,6,7,8,9,10);
$somaPar = 0;

foreach($arr as $key => $value){
    if($value% 2 == 0){
        $somaPar+=$value;
    }
}
echo $somaPar;
?>
<h1>algoritmo de euclides</h1>
<?php 

$a = 10;
$b = 15;
while($a <> $b){
    if($a > $b){
        $a-=$b;
    }else{
        $b-=$a;
    }
}
echo $a;
?>    
<h1>Converter binario para decimal</h1>
<?php
$arr = array(1,1,1,0,0,0,1);
$aux = null;;
foreach($arr as $key => $value){
    $aux .= $value;
}
echo bindec($aux);
?>
<h1>ordem decrescente</h1>
<?php
$arr = array(35,70,1,9,6,25,12);
//echo $arr;
echo rsort($arr);
?>
</body>
</html>

