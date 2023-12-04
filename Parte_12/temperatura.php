<?php
require_once 'Class_combus.php';

$unidadedeMedida = '';
$temperatura = '';

if (isset($_POST['btnCalc'])) {
    $unidadedeMedida = $_POST['unidadedeMedida'];
    $temperatura = $_POST['temp'];

    $obj = new CelsiusFahrenheit();
    $ret = $obj->Conversao($unidadedeMedida, $temperatura);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="temperatura.php" method="POST">
        <label>Selecione Medição de Temperatura:</label>
        <select name="unidadedeMedida">
            <option value="">Selecione</option>
            <option value="1">Celsius</option>
            <option value="2">Fahrenheit</option>
        </select>
        <br>
        <label>Temperatura:</label>
        <input type="number" name="temp" placeholder="Digite a temperatura" value="<?= isset($temperatura) ? $temperatura : '' ?>">
        <br>
        <button name="btnCalc">Calcular</button>
    </form>
    <hr>
    <span>Resultado Final: <?= isset($ret) ? $ret : '' ?></span>
</body>

</html>