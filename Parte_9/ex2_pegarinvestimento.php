<?php

    $nome = '';
    $valor = '';
    $ganhoPerda = '';
    $banco = '';

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $valor = trim($_POST['valor']);
        $ganhoPerda = trim($_POST['ganhoPerda']);
        $banco = trim($_POST['banco']);

        if ($nome == '' || $valor == '' || $ganhoPerda == '' || $banco == '') {
            $msgError = '<div style="color: red;font-family: tahoma;">Preencher todos os campos obrigatórios!</div><hr>';
        } else if ($ganhoPerda != 'p' && $ganhoPerda != 'P' && $ganhoPerda != 'G' && $ganhoPerda != 'g') {
            $msgError = '<div style="color: red; font-family: tahoma;">Digite a Sigla Correta da Operação!</div><hr>';
        } else if ($banco != 'SA' && $banco != 'sa' && $banco != 'IT' && $banco != 'it' && $banco != 'SI' && $banco != 'si') {
            $msgError = '<div style="color: red;font-family: tahoma;">Digite a Sigla Correta do Banco !</div><hr>';
        } else {
            header("location: ex2_mostrarinvestimentos.php?nome=$nome&valor=$valor&ganhoPerda=$ganhoPerda&banco=$banco");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investimento</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="ex2_pegarinvestimento.php" method="POST">
        <label>Nome Completo : </label>
        <input type="text" name="nome" value="<?= $nome ?>" placeholder="Digite seu nome aqui...">
        <br>
        <label>Valor do Investimento :</label>
        <input type="text" name="valor" value="<?= $valor ?>">
        <hr>
        <label>Digite uma Sigla (Operação):</label>
        <h5 style="padding: 0px; margin: 0px;">- "Ganho de 3% - Sigla "G"</h5>
        <h5 style="padding: 0px; margin: 0px;">- "Ganho de 5% - Sigla "P"</h5>
        <br>
        <input type="text" name="ganhoPerda" value="<?= $ganhoPerda ?>">
        <hr>
        <label>Digite uma Sigla (Banco):</label>
        <br>
        <h5 style="padding: 0px; margin: 0px;">- "Santander" - Sigla "SA".</h5>
        <h5 style="padding: 0px; margin: 0px;">- "Itaú" - Sigla "IT".</h5>
        <h5 style="padding: 0px; margin: 0px;">- "Sicredi" - Sigla "SI".</h5>
        <br>
        <input type="text" name="banco" value="<?= $banco ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>

</body>

</html>