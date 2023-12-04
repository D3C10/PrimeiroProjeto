<?php

    // Variável do Tipo Array: Um Array é uma váriavel que armazena inumeros dados de uma vez só.
    // Organizando cada dado em uma posição estruturada de forma numerica, iniciando do valor 0 em diante!

    //  Exemplo 1 de Variável do Tipo Array.
    $frutas = array();

    echo '<h2 style="font-family: Tahoma;">Tesste de Variável de Tipo Array utilizando o comando PHP: print_r.</h2><br>';

    $frutas[] = 'Laranja'; // Posição 0;
    $frutas[] = 'Maçã'; // Posição 1;
    $frutas[] = 'Limão'; // Posição 2;

    echo '<pre>';
    print_r($frutas);
    echo '</pre><br>';

    echo '<hr>';

    //  Exemplo 2 de Variável do Tipo Array.
    // Esta forma de sintaxe de Variável de Tipo Array, posiciona os dados de acotdo a sequencia dentro do parenteses!
    $cores = array('Vermelho', 'Verde', 'Amarelo', 'Preto', 'Branco');

    echo '<h2 style="font-family: Tahoma;">Tesste de Variável de Tipo Array utilizando o comando PHP: var_dump.</h2><br>';

    echo '<pre>';
    var_dump($frutas);
    echo '</pre><br>';

    echo '<hr>';

    // Todo Laço de Repetição que for realizar a leitura de uma Variável de Tipo Array, se inicia na posição 0.
    // O que é um Laço de Repetição? Independente do comando de Laço de Repetição, a função dele é repetir linhas de códigos.

    echo '<h2 style="font-family: Tahoma;">Tesste de Laço de Repetição: for.</h2><br>';

    echo '<p><strong>Teste de Laço de Repetição com Array cores!</strong></p><br>';

    for($i=0; $i < count($frutas); $i++){
        echo 'A Fruta da posição ' . $i . ' é: ' . $frutas[$i] . '.<br>';
    }

    echo '<p><strong>Teste de Laço de Repetição com Array cores!</strong></p><br>';

    for($i=0; $i < count($cores); $i++){
        echo 'A Cor da posição ' . $i . ' é: ' . $cores[$i] . '.<br>';
    }
?>