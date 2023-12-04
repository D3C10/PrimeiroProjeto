<?php
$peso ='';
$alt = '';

$gordurinha ='';


if(isset($_POST['btnCalcular'])){
    $peso = $_POST['peso'];
    $alt = $_POST['alt'];

    if($peso == '' || $alt == ''){
        echo 'Preencher campo obrigatório!';
    }else{
        $gordurinha = ($peso /($alt * $alt));

        if( $peso >= 0 && $peso < 20){
            echo 'Magro';
        }else if ($peso > 21 && $peso < 25){
            echo 'Peso Ideal';
        }else if ($peso > 26 && $peso < 30){
            echo 'Obeso';
        }else{
            echo 'Muito Obeso';
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
    <title>Academia De Gordo</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form action="calculo_imc.php" method="POST">
    <label>Peso :</label>
    <input type="text" name="peso" value="<?= $peso ?>">
    <br>
    <label>Altura</label>
    <input type="text" name="alt" value="<?= $alt ?>">
    <br>
    <button name="btnCalcular">Calcular</button>
</form>
   <span>Resultado Final :</span>
   <input disabled value="<?= $gordurinha ?>"> 
</body>
</html>