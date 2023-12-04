<?php

    $idade = '';
    $qtd = '';
    $nome = '';

    if(isset($_POST['btn_Ver'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $qtd = $_POST['qtd'];

        if($nome == '' || $idade == '' || $qtd == ''){
            echo 'Preencher todos os campos obrigatórios!';
        }else{
            for($i=1; $i <= $qtd; $i++){
                echo 'Meu nome é: ' . $nome . ' e tenho ' . $idade . ' anos de idade: Número de Repetição: ' . $i . '.<br>'; 
            }
        }
        echo '<hr>';
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

<form action="idade_nome.php" method="POST">
    <label>Digite seu nome : </label>
    <input type="text" name="nome" value="<?= $nome ?>">
    <br>
    <label>Digite sua idade :</label>
    <input type="text" name="idade" value="<?= $idade ?>">
    <br>
    <label>Quantidade de vezes :</label>
    <input type="text" name="qtd" value="<?= $qtd ?>">
    <br>
    <button name="btn_Ver">Ver Resultado</button>
</form>
    
</body>
</html>