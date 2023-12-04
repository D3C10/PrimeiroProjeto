<?php
require_once 'function.php';

$numero1 = '';
$numero2 = '';
$numero3 = '';
$numero4 = '';
$numero5 = '';
$retorno = '';



if (isset($_POST['btnCalcular'])) {
    $numero1 = trim($_POST['vl1']);
    $numero2 = trim($_POST['vl2']);
    $numero3 = trim($_POST['vl3']);
    $numero4 = trim($_POST['vl4']);
    $numero5 = trim($_POST['vl5']);

    if (SomarNumeros($numero1, $numero2, $numero3, $numero4, $numero5) === 0) {
        $msg = 'Preencher todos os campos obrigatórios!';
    } else {
        $retorno = SomarNumeros($numero1, $numero2, $numero3, $numero4, $numero5);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form method="POST" action="atividade_3.php">
        <label>Primeiro Número :</label>
        <input type="text" name="vl1" value="<?= isset($numero1) ? $numero1 :   '' ?> ">
        <br>
        <label>Segundo Número :</label>
        <input type="text" name="vl2" value="<?= isset($numero2) ? $numero2 : '' ?>  ">
        <br>
        <label>Terceiro Número :</label>
        <input type="text" name="vl3" value="<?= isset($numero3) ? $numero3 :  '' ?> ">
        <br>
        <label>Quarto Número :</label>
        <input type="text" name="vl4" value="<?= isset($numero4) ?  $numero4 : '' ?>  ">
        <br>
        <label>Quinto Número :</label>
        <input type="text" name="vl5" value="<?= isset($numero5) ? $numero5 : '' ?>    ">
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>
    <?php if (isset($retorno) && $retorno != '') ?>
    <span> Resultado Final :</span>
    <input disabled value="<?= isset($retorno) ? $retorno : '' ?>">
    
</body>

</html>