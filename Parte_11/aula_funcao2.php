<?php

function nomenclatura($nome){
if(strlen($nome)< 3 ){
    return -1;
}else{
    return 1;
}
   

return 'Nome deverá conter no minimo 3 caracteres'; 

}

function descreva($descri){
    if(strlen($descri)< 50 ){
        return -2;
    }else{
        return 1;
    }
    $descri = -2;
    return 'Descrição deverá conter no minimo 50 caracteres ';
}

function password($senha){
   
    if(strlen($senha)){
        if(strlen($senha)< 6 ){
            return -3;
        }else{
            return 1 ;
        }
    }

    $senha = -3;
    return 'Senha deverá conter no minimo 6 caracteres';
}

function repete($repet, $senha){
    if($senha != $repet){
        return -4;
    }else{
        return 1;
    }
    
    $repet = -4;
    return 'Os campos Senha e Repetir senha deverão ser iguais '; 
}
function qtd($Contarcaracteres){
    $qtd = strlen($Contarcaracteres);
    return  $qtd;
}
?>