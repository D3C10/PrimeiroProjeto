<?php
$salario = '';
$somatotal = '';

$aumento15 = '';
$aumento20 = '';


if (isset($_POST['btnCalcular'])) {
    $salario = trim($_POST['salario']);


    if ($salario == '') {
        echo 'Preencher campo Obrigatório!!';
    } else {
        $aumento15 = $aumento15($salario * 15)/100;
        $aumento20 = $aumento20($salario * 18)/100;

        $somatotal = $aumento15 + $aumento20;



        if ($aumento15 >= 0 && $aumento15<= 100) {
            echo 'Aumento Ruim';
        } else if ($aumento15 >= 101 && $aumento15 <= 200) {
            echo 'Aumento Razoavel';
        } else if ($aumento15 >= 201 && $aumento15 <= 300) {
            echo 'Aumento Bom';
        } else if ($aumento15 >= 301 && $aumento15 <= 400) {
            echo 'Aumento Ótimo';
        } else {
            echo 'Aumento Excelente';
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Conta </title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="salario_pagamento.php" method="POST">
        <label>Salario :</label>
        <input type="text" name="salario" value="<?= $salario ?>" placeholder="Digite seu salário...">
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>

</body>

</html>