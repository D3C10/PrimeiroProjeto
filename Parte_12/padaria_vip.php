<?php
    require_once 'PadariadeGordo.php';

    $selecione ='';
    $donutdequeijo ='';
    $paodequeijo =''; 
    $bolodepaodequeijo='';
    $mistoquente ='';
   $xtudofofao ='';

   if(isset($_POST['btnEnviar'])){
        $selecione = $_POST['selecione'];
        $donutdequeijo = $_POST['donutdequeijo'];
        $paodequeijo = $_POST['paodequeijo'];
        $bolodepaodequeijo = $_POST['bolodepaodequeijo'];
        $mistoquente = $_POST['mistoquente'];
        $xtudofofao = $_POST['xtudofofao'];
        
        $objcomida = new PadariadeGordo();

        $retornar = $objcomida-> ComidadeGordo($selecione, $donutdequeijo, $paodequeijo, $bolodepaodequeijo, $mistoquente , $xtudofoao);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padaria de Gordo</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="padaria_vip.php" method="POST">
        <label>Cardápio da Fofura:</label>
        <select name="selecione">Selecione</select>
        <option value="donutdequeijo">Donut de queijo</option>
        <option value="xtudofofao">x-tudofofao</option>
        <option value="paodequeijo">Pao de queijo</option>
        <option value="bolodepaodequeijo">Bolo de pao de queijo</option>
        <option value="mistoquente">Misto quente</option>
        <button name="btnEnviar">Enviar</button>
    </form>
</body>
</html>