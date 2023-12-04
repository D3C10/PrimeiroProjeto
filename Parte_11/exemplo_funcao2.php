<?php

require_once 'funcao/calculo.php';

$nome = '';
$sobre ='';
$qtd_nome = '';
$qtd_sobre ='';
$qtd_total = '';

if(isset($_POST['btnContar'])){
    $nome = $_POST['nome'];
    $sobre = $_POST['sobre'];
    $qtd_nome = ContarCaracteres($nome);
    $qtd_sobre = ContarCaracteres($sobre);
    $qtd_total = SomarCaracteresTotal($qtd_nome, $qtd_sobre);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exemplo_funcao2.php" method="POST">
        <label>Nome :</label>
        <input type="text" name="nome" value="<?= $nome ?>"><br>

        <label>Sobrenome :</label>
        <input type="text" name="sobre" value="<?= $sobre ?>">
        <br>
        <button name="btnContar">Contar palavras</button>
        <br><br>
        <label>Qtde de Caracteres NOME:</label>
        <input disabled value="<?=$qtd_nome ?>">
        <br><br>
        <label>Qtde de Caracteres SOBRENOME:</label>
        <input disabled value="<?=$qtd_sobre ?>">
        <br><br>
        <label>Qtde de Caracteres TOTAL:</label>
        <input disabled value="<?=$qtd_total ?>">
        <br><br>
    </form>
</body>
</html>