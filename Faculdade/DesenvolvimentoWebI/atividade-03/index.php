<?php
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $arr["nome"] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $arr["idade"] = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_SPECIAL_CHARS);

    if($arr["idade"] >= 18){        
        $podeVotar["retorno"] = "pode votar!";
    }else{
        $podeVotar["retorno"] = "não pode votar!";
    }
}
$_SESSION["nome"] = $arr["nome"];
$_SESSION["idade"] = $arr["idade"];
$_SESSION["podeVotar"] = $podeVotar["retorno"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
         if(isset($podeVotar["retorno"])){
             echo "<h3>O ".$arr["nome"]." ".$podeVotar["retorno"]."</h3>";
             echo $_SESSION["nome"];
             echo $_SESSION["idade"];
             echo $_SESSION["podeVotar"];
         }
    ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <h4>NOME:</h4>
        <input type="text" name="nome">
        <h4>IDADE</h4>
        <input type="number" name="idade">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>