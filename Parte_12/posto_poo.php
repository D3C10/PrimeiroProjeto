<?php
    
    require_once 'Class_combus.php';

    $qtd = '';
    $tipocombus = '';
    $retornar = '';
    $msgError = '';
    
    if(isset($_POST['btnCalculartotal'])){
        $tipocombus = $_POST['combustivel'];
        $qtd = $_POST['qtd'];

        $objcombus = new Combustivel();
        $retornar = $objcombus->Calculartotallitros($tipocombus, $qtd);

        if($retornar == 0){
            $msgError = '<div style=" red; font-family: tahoma;">Preecher todos os campos obrigatórios!</div>';
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="posto_poo.php" method="POST">
        <label>Tipo do Combustível:</label>
        <select name="combustivel">
            <option value="">Selecione</option>
            <option value="1">Gasolina</option>
            <option value="2">Etanol</option>
        </select>
        <br>
        <label>Quantidade de Litros Total:</label>
        <input type="text" name="qtd" value="<?= $qtd ?>">
        <br>
        <button name="btnCalculartotal">Calcular Total</button>
    </form>
    <hr>
    <span><?= $msgError ?></span>
    <input disabled value="<?= $retornar ?>">
</body>
</html>