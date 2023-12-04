<?php

class PadariadeGordo{
    public function ComidadeGordo($selecione, $donutdequeijo, $bolodepaodequeijo,$mistoquente, $xtudofofao){
        if($selecione==''|| $donutdequeijo==''|| $bolodepaodequeijo==''|| $mistoquente=='' || $xtudofofao==''){
            return 0; 
        }else{
            if($selecione == 1){
                $msg = $this-> Selecione($selecione);
            }else if ($donutdequeijo == 2){
                $msg = $this-> Donut($donutdequeijo);
            }else if ($bolodepaodequeijo == 3){
                $msg = $this-> Bolo($bolodepaodequeijo);
            }else if ($mistoquente == 4){
                $msg = $this-> Misto($mistoquente);
            }else if ( $xtudofofao ==5 ){
                $msg = $this-> Xtudo($xtudofofao);
            } 
        return $msg;
        }
    }

    private function Selecione($selecione){
        
    }

    private function Donut($donutdequeijo){
        $padaria = $donutdequeijo * 8.50;

        return $padaria;
    } 

    private function Bolo($bolodepaodequeijo){
        $bolim = $bolodepaodequeijo * 5.00;
        
        return $bolim;
    }

    private function Misto($mistoquente){
        $monobola = $mistoquente * 6.00;

        return $monobola;
    }

    private function Xtudo($xtudofofao){
        $paodelanche = $xtudofofao * 32.00;
    }
}
