<?php

$not1 = '';
$not2 = '';
$not3 = '';
$not4 = '';

$media = '';

if (isset($_POST['btnCalcular'])) {

    $not1 = trim($_POST['not1']);
    $not2 = trim($_POST['not2']);
    $not3 = trim($_POST['not3']);
    $not4 = trim($_POST['not4']);

    if ($not1 == '' || $not2 == '' || $not3 == '' || $not4 == '') {
        echo ' Preencher campo obrigatório! ';
    }else{
        $media = ($not1 + $not2 + $not3 + $not4) /4;
        if($media >= 0 && $media <= 40){
            echo ' Sua  média é : ' . $media . ' portanto você está REPROVADO !!';
        }else if($media > 40 && $media <= 59){
            echo ' Sua média é : '. $media . ' portanto você está em EXAME!! ' ;
        }else if($media >= 60 ){
            echo ' Sua média é : ' . $media . ' Você está APROVADO!!!';
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
    <title>Escola do Javali</title>
</head>

<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <form action="aup3_ex.php" method="POST">
        <label>Nota 1:</label>
        <input type="text" name="not1" value="<?= $not1 ?>" placeholder="Digite sua primeira nota...">
        <br>
        <label>Nota 2:</label>
        <input type="text" name="not2" value="<?= $not2 ?>" placeholder="Digite sua segunda nota...">
        <br>
        <label>Nota 3:</label>
        <input type="text" name="not3" value="<?= $not3 ?>" placeholder="Digite sua terceira nota...">
        <br>
        <label>Nota 4:</label>
        <input type="text" name="not4" value="<?= $not4 ?>" placeholder="Digite sua quarta nota...">
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>
</body>

</html>