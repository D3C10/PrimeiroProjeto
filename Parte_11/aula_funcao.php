<?php

$nome = '';
$descri = '';
$senha = '';
$repet = '';

require_once 'aula_funcao2.php';

if (isset($_POST['btnCampos'])) {
    $nome = trim($_POST['nome']);
    $descri = trim($_POST['descri']);
    $senha = trim($_POST['senha']);
    $rept = trim($_POST['repet']);

    if ($nome == '' || $descri == '' || $senha == '' || $repet == '') {
        echo 'Preencher campos obrigatórios!';
    } else if(nomenclatura($nome)== -1 ){
        echo 'Nome deverá conter no minimo 3 caracteres!';
    }else if(descreva($descri) == -2){
        echo 'Descrição deverá cpnter no minimo 50 caracteres !!';
    }else if(password($senha)== - 3){
        echo 'Senha deverá conter no minimo 6 caracteres!!';
    }else if (repete($senha,$repet) == - 4){
        echo 'Os campos senha e Repetir senha deverao ser iguais! ';
    }else{
        echo 'Cadastro realizado com sucesso!';
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

<body>
    <form action="aula_funcao.php" method="POST">
        <label>Nome :</label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <br>
        <label>Descrição :</label>
        <input type="text" name="descri" value="<?= $descri ?>">
        <br>
        <label>Senha :</label>
        <input type="text" name="senha" value="<?= $senha ?>">
        <br>
        <label>Repetir Senha :</label>
        <input type="text" name="rept" value="<?= $repet ?>">
        <br>
        <button name="btnCampos">Campos validados com sucesso</button>
    </form>
</body>

</html>