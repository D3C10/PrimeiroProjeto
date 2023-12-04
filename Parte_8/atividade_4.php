<?php
$salario = '';
$aumento = '';

$resultado ='';

if(isset($_POST['btnCalcular'])){
$salario = trim($_POST['salario']);
$aumento = trim($_POST['aumento']);


if($salario == '' || $aumento == '' ){
    echo 'Preencher campo obrigatório!!';
}else{
   $resultado = $salario + (($salario * $aumento) /100);
    if($resultado >= 0  && $resultado < 100){
        echo 'Aumento Nivel 1!';
    }else if ($resultado >= 100 && $resultado < 200){
        echo 'Aumento Nivel 2 !';
    }else if ($resultado >= 200 && $resultado < 300){
        echo 'Aumento Nível 3 !';
    }else if ($resultado >= 300 && $resultado < 400){
        echo 'Aumento Nível 4!';
    }else{
        echo 'Aumento Nivel 5!';
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
    <title>Atividade 4 </title>
</head>

<body>
    <form action="atividade_4.php" method="post">
        <label>Salário :</label>
        <input type="number" name="salario" value="<?= $salario ?>">
        <br>
        <label>Aumento :</label>
        <input type="number" name="aumento" value="<?= $aumento ?>">
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>



</body>

</html>