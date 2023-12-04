<?php

$pagamento ='';
$primeiroaumento = '';
$segundoaumento ='';
$result = '';
$total = '';

if(isset($_POST['btn_calcular'])){
    $pagamento = $_POST['salario'];
    if(trim($pagamento)== ''){
        echo 'Preencher Salário corretamente!';
    }else{
        $primeiroaumento = ($pagamento * 15) / 100;
        $segundoaumento = ($pagamento * 18) / 100;

        $result = $primeiroaumento + $segundoaumento;
        $total = $pagamento + $result;

        if($result < 100){
            echo 'Aumento RUIM!';
        }elseif($result >= 100 && $result < 200){
            echo 'Aumento Razoavel!';
        }elseif ($result >= 200 && $result < 300){
            echo 'Aumento Bom';
        }elseif($result >=300 && $result < 400){
            echo 'Aumento ÓTIMO';
        }elseif ($result >= 400){
            echo 'Aumento Excelente!';
        }
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
    <hr>
    <form action="aumento_pagamento.php" method="post">
        <label>Salário:</label>
        <input type="text" name="salario" value="<?= $pagamento ?>">
        <br>
        <button name="btn_calcular">Calcular</button>
    </form>
    <br>
    <label>Aumento com 15%:</label>
    <input disabled value="<?= $primeiroaumento ?>">
    <br>
    <label>Aumento com 18%:</label>
    <input disabled value="<?= $segundoaumento ?>">
    <br>
    <label>Soma total dos aumentos:</label>
    <input disabled value="<?=$result ?>">
    <br>
    <label>Soma total dos aumentos e o salário:</label>
    <input disabled value="<?= $total ?>"
</body>
</html>
