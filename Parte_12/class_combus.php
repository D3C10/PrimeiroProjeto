<?php
    class Combustivel{
        public function Calculartotallitros($tipocombus , $qtd){
            if ($tipocombus =='' || $qtd==''){
                return 0;
            }else{
               if($tipocombus == 1){
                    $msg = $this-> Gasolina($qtd);
               }else if($tipocombus == 2){
                    $msg = $this-> Etanol($qtd);
               }
               return $msg;
            }
        }
    
    
        private function Gasolina($qtd){
            $gasolina = $qtd * 5.30;
            return number_format($gasolina, 2, ',', '.');

        }

        private function Etanol($qtd){
            $etanol = $qtd * 3.20;
            return number_format($etanol, 2, ',', '.');
        }

    }


   

?>