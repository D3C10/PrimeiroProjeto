
<?php

if (isset($_GET['num'])) {
    echo "<hr>";
    $number = $_GET['num'];
    for ($i = 1; $i <= 10; $i++) {
        echo "$i * $number = " .($i * $number);
        echo '<br><br>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada | DF</title>
    <style>
        body {
            text-align: center;
            background: linear-gradient(to right, dodgerblue, purple);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .box_form {
            background-color: rgba(0, 0, 0, 0.5);
            width: 30%;
            border-radius: 15px;
            padding: 20px;
        }

        #num {
            padding: 5px;
            border: none;
            outline: none;
            width: 50%;
            margin-bottom: 20px;
        }

        form {
            padding: 1em;
        }

        input[type="Submit"] {
            padding: 5px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            background-color: dodgerblue;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>

<body style="font-family: 'Times New Roman', Times, serif;">
    <h1>Tabuada - Décio Ferreira</h1>
    <div class="box_form">
        <form action="exercicio4_aula.php" method="Get">
            <div>
                <label for="num">Número :</label>
                <select name="num">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                </select>
            </div>
            <input type="Submit" value="Enviar">
        </form>
        
    </div>
</body>

</html>