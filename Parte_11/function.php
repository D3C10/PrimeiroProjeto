<?php

function SomarNumeros($n1, $n2, $n3, $n4 , $n5){

    if($n1='' || $n2==''|| $n3==''|| $n4==''|| $n5==''){
        return 0;
    }else{
        $resultado = $n1 + $n2 + $n3 + ($n4 * $n5);
        return $resultado;
    }



}