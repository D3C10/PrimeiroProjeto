<?php
$ganhojan = '';
$ganhofev = '';
$ganhomarc = '';
$ganhoabr = '';
$ganhomai = '';
$ganhojun = '';
$ganhojul = '';
$ganhoago = '';
$ganhoset = '';
$ganhoout = '';
$ganhonov = '';
$ganhodez = '';

$somadosganhos = '';
$subtrair = '';

$perdajan = '';
$perdafev = '';
$perdamarc = '';
$perdaabr = '';
$perdamai = '';
$perdajun = '';
$perdajul = '';
$perdaago = '';
$perdaset = '';
$perdaout = '';
$perdanov = '';
$perdadez = '';

$somadasperdas = '';
$subtrair = '';

if (isset($_POST['btn_Calcular'])) {
    $ganhojan = $_POST['jan'];
    $ganhofev = $_POST['fev'];
    $ganhomarc = $_POST['marc'];
    $ganhoabr = $_POST['abr'];
    $ganhomai = $_POST['mai'];
    $ganhojun = $_POST['jun'];
    $ganhojul = $_POST['jul'];
    $ganhoago = $_POST['ago'];
    $ganhoset = $_POST['set'];
    $ganhoout = $_POST['out'];
    $ganhonov = $_POST['nov'];
    $ganhodez = $_POST['dez'];


    $perdajan = $_POST['jan'];
    $perdafev = $_POST['fev'];
    $perdamarc = $_POST['marc'];
    $perdaabr = $_POST['abr'];
    $perdamai = $_POST['mai'];
    $perdajun = $_POST['jun'];
    $perdajul = $_POST['jul'];
    $perdaago = $_POST['ago'];
    $perdaset = $_POST['set'];
    $perdaout = $_POST['out'];
    $perdanov = $_POST['nov'];
    $perdadez = $_POST['dez'];

    $somadosganhos = $ganhojan + $ganhofev + $ganhomarc +  $ganhoabr + $ganhomai + $ganhojun +  $ganhojul +  $ganhoago + $ganhoset +  $ganhoout + $ganhonov + $ganhodez;

    $somadasperdas =  $perdajan + $perdafev + $perdamarc + $perdaabr + $perdamai + $perdajun + $perdajul + $perdaago + $perdaset + $perdaout + $perdanov + $perdadez;

    $subtrair = $somadosganhos - $somadasperdas;

    $lucroRealjan = $ganhojan - $perdajan;
    $lucroRealfev = $ganhofev - $perdafev;
    $lucroRealmarc = $ganhomarc - $perdamarc;
    $lucroRealabr = $ganhoabr - $perdaabr;
    $lucroRealmai = $ganhomai - $perdamai;
    $lucroRealjun = $ganhojun - $perdajun;
    $lucroRealjul = $ganhojul - $perdajul;
    $lucroRealago = $ganhoago - $perdaago;
    $lucroRealset = $ganhoset - $perdaset;
    $lucroRealout = $ganhoout - $perdaout;
    $lucroRealnov = $ganhonov - $perdanov;
    $lucroRealdez = $ganhodez - $perdadez;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ex3_calc_logica.php" method="POST">
        <label>Ganho do mês Jan </label>
        <input type="text" name="jan" value="<?= $ganhojan ?>">
        <br>
        <label>Ganho do mês fev</label>
        <input type="text" name="fev" value="<?= $ganhofev ?>">
        <br>
        <label>Ganho do mês marc </label>
        <input type="text" name="marc" value="<?= $ganhomarc ?>">
        <br>
        <label>Ganho do mês abril</label>
        <input type="text" name="abr" value="<?= $ganhoabr ?>">
        <br>
        <label>Ganho do mês mai</label>
        <input type="text" name="mai" value="<?= $ganhomai ?>">
        <br>
        <label>Ganho do mês jun</label>
        <input type="text" name="jun" value="<?= $ganhojun ?>">
        <br>
        <label>Ganho do mês jul</label>
        <input type="text" name="jul" value="<?= $ganhojul ?>">
        <br>
        <label>Ganho do mês ago</label>
        <input type="text" name="ago" value="<?= $ganhoago ?>">
        <br>
        <label>Ganho do mês set</label>
        <input type="text" name="set" value="<?= $ganhoset ?>">
        <br>
        <label>Ganho do mês out</label>
        <input type="text" name="out" value="<?= $ganhoout ?>">
        <br>
        <label>Ganho do mês nov</label>
        <input type="text" name="nov" value="<?= $ganhonov ?>">
        <br>
        <label>Ganho do mês dez</label>
        <input type="text" name="dez" value="<?= $ganhodez ?>">
        <br>


        <!--------Termina 1° parte do calculo------>

        <label>Perda do mês Jan</label>
        <input type="text" name="jan" value="<?= $perdajan ?>">
        <br>
        <label>Perda do mês fev</label>
        <input type="text" name="fev" value="<?= $perdafev ?>">
        <br>
        <label>Perda do mês marc </label>
        <input type="text" name="marc" value="<?= $perdamarc ?>">
        <br>
        <label>Perda do mês abril</label>
        <input type="text" name="abril" value="<?= $perdaabr ?>">
        <br>
        <label>Perda do mês mai</label>
        <input type="text" name="mai" value="<?= $perdamai ?>">
        <br>
        <label>Perda do mês jun</label>
        <input type="text" name="jun" value="<?= $perdajun ?>">
        <br>
        <label>Perda do mês jul</label>
        <input type="text" name="jul" value="<?= $perdajul ?>">
        <br>
        <label>Perda do mês ago</label>
        <input type="text" name="ago" value="<?= $perdaago ?>">
        <br>
        <label>Perda do mês set</label>
        <input type="text" name="set" value="<?= $perdaset ?>">
        <br>
        <label>Perda do mês out</label>
        <input type="text" name="out" value="<?= $perdaout ?>">
        <br>
        <label>Perda do mês nov</label>
        <input type="text" name="nov" value="<?= $perdanov ?>">
        <br>
        <label>Perda do mês dez</label>
        <input type="text" name="dez" value="<?= $perdadez ?>">
        <br>
        <button name="btn_Calcular">Calcular</button>

    </form>
    <hr>
    <span>Soma dos Ganhos</span>
    <input disabled value="<?= $somadosganhos ?>">
    <br>
    <span>Soma das Perdas</span>
    <input disabled value="<?= $somadasperdas ?>">
    <br>
    <span>Lucro Real Anual:</span>
    <input disabled value="<?= $subtrair ?>">
    <br>
    <span>Lucro Real de Janeiro:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Fevereiro:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Março:</span>
    <input disabled value="<?= $subtrair ?>">


    <span>Lucro Real de Abril:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Maio:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Junho:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Julho:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Agosto:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Setembro:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Outubro:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Novembro:</span>
    <input disabled value="<?= $subtrair ?>">

    <span>Lucro Real de Dezembro:</span>
    <input disabled value="<?= $subtrair ?>">
</body>


</html>