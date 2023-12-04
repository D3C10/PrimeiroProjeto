<?php

    if(isset($_POST['btnCalcular'])){
        $camp1 = trim($_POST['camp1']);
        $camp2 = trim($_POST['camp2']);
        $camp3 = trim($_POST['camp3']);
        $camp4 = trim($_POST['camp4']);
        $camp5 = trim($_POST['camp5']);

        if($camp1 == '' || $camp2 == '' || $camp3 == ''){
            echo 'Preencher o campo obrigatorio!';
        }else{

            // $multi = $camp1 * $camp2;
            // $soma = $camp3 + $camp4 + $camp5;
            // $calculo = $multi + $soma; 

            $resultado = (($camp1 + $camp2) * 2) + ($camp3 + $camp4 + $camp5);

            if($resultado > 100){
                echo 'Acima de 100';
            }else if($resultado < 100){
               echo 'Abaixo de 100';
            }else{
                echo 'Igual a 100';
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
    <title>Valorização</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="au8_ex.php" method="POST">
        <label>Campo 1:</label>
        <input type="text" name="camp1" value="<?= $camp1 ?>">
        <br>
        <label>Campo 2:</label>
        <input type="text" name="camp2" value="<?= $camp2 ?>">
        <br>
        <label>Campo 3:</label>
        <input type="text" name="camp3" value="<?= $camp3 ?>">
        <br>
        <label>Campo 4:</label>
        <input type="text" name="camp4" value="<?= $camp4 ?>">
        <br>
        <label>Campo 5:</label>
        <input type="text" name="camp5" value="<?= $camp5 ?>">
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>
</body>
</html>