<?php

$soma ='';

if(
    isset($_GET['numero1']) && $_GET['numero1'] != '' &&
    isset($_GET['numero2']) && $_GET['numero2'] != '' 

){
    $valor1 = $_GET['numero1'];
    $valor2 = $_GET['numero2'];

    $soma = $valor1 + $valor2;

    if($soma > 100){
        echo 'Resultado maior que 100!<br>';
    }else if ($soma < 100){
        echo 'Resultado menor que 100!<br>';
    }else{
        echo 'Resultado é igual a 100!<br>';
    }
 }else{
    header('location: teste_1.php');
    exit;
 }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body>
    <span>Resultado Final:</span>
    <input disabled value="<?= $soma ?>"
</body>
</html>