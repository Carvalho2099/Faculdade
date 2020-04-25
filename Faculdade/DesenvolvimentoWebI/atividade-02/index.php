<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1>Multiplicação entre matizes</h1>
<?php

?>
<h1>Números primos</h1>
<?php 
    
    $primosFile = fopen("newfile.txt","w") or die("Incapaz de abrir o arquivo");
    $primos = '2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47,53, 59, 61, 67, 71';
fwrite($primosFile,$primos);
fclose($primosFile);
    
?>    
<h1>array</h1>
<?php

?>
</body>
</html>

