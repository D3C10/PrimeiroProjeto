<?php

    require_once 'funcao/calculo.php';

    $numero1 = '';
    $numero2 = '';
    $resultado = '';
    if(isset($_POST['btnSomar'])){
        $numero1 = $_POST['n1'];
        $numero2 = $_POST['n2'];

        if(trim($numero1) == ''){
            echo 'Preencher Campo Numero 1';
        }
        else if(trim($numero2) == ''){
            echo 'Preencher Campo Numero 2';
        }else{
            $resultado= Somar($numero1,$numero2);
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
    <form action="exemplo_funcao.php" method="POST">
        <label>Numero 1 :</label>
        <input name="n1" value="<?= $numero1 ?>">
        
        <label>Numero 2 :</label>
        <input  name="n2" value="<?= $numero2 ?>">

        <button name="btnSomar">Somar</button>
        
        <input disabled value="<?= $resultado ?>">
        
    </form>
    
</body>

</html>
