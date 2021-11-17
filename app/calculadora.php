<?php
    class Calculadora {
        function sumar($x, $y){
            return $x + $y;
        }

        function restar($x, $y){
            return $x - $y;
        }

        function multiplicar($x, $y){
            return $x * $y;
        }
        function dividir($x, $y){
            if($y === 0){
                throw new exception("Division por 0");
            }
            return $x / $y;
        }
        function generarArreglo(){
            $arreglo = array();
            for($i=0; $i<5; $i++){
                $arreglo[$i] = mt_rand(1, 10);
            }
            return $arreglo;
        }
    
        function capturarEntradasPermutacion()
         {       
         }

        function calcularPermutacion($n, $r){
         $numerador = $this->calcularFactorial($n);
         $denominador = $this->calcularFactorial($n-$r);
         return $numerador/$denominador;
            }

        function calcularFactorial($numero)
            {
            }
}
?>