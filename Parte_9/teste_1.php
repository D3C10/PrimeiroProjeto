<?php
$numero1 = '';
$numero2 = '';

if(isset($_POST['btnEnviar'])){
    $numero1 = trim($_POST['vl1']);
    $numero2 = trim($_POST['vl2']);

    if($numero1 == ''|| $numero2 == ''){
        echo 'Preencher todos os campos obrigatórios!';
    }else{
        header("location: teste_2.php?numero1=$numero1&numero2=$numero2");
    exit;
    }





}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <form action="teste_1.php" method="POST">
        <label>Primero Valor:</label>
        <input type="text" name="vl1" value="<?= $numero1 ?>">
        <br>
        <label>Segundo Valor:</label>
        <input type="text" name="vl2" value="<?= $numero2 ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
</body>
</html>