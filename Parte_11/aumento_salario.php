<?php
    $salar = '';
    $aument = '';
    $aument2 = '';
    $aument3 = '';
    $result ='';

    require_once 'aumento_salario2.php';

if (isset($_POST['btnCalcular'])) {
    $salar = trim($_POST['salar']);
    $aument = trim($_POST['aument']);
   $aument2= porcentagem($salar, $aument);
   $aument3 = aumentado($aument, $salar);
    if ($salar == '' || $aument == '') {
        echo ' Preencher campos obrigatórios';
    }else{
        $result = porcentagem($salar, $aument);
    }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
   
    <form method="POST" action="aumento_salario.php">
        <label>Salario :</label>
        <input type="text" name="salar" value="<?= $salar ?>" placeholder="Digite seu salário aqui...">
        <br>
        <label>Aumento :</label>
        <input type="text" name="aument" value="<?= $aument ?>" placeholder="Digite seu aumento...">
        
        <br>
        
        <button name="btnCalcular">Calcular</button>
        <input disabled value="<?= $result?>">
    </form>
</body>

</html>