<?php
    $numero1= 10;
    $numero2 = 20;
    $opc = "*";

    if($opc == "/"){
        Divisão($numero1, $numero2);
    }elseif($opc == "+"){
        Adicao($numero1, $numero2);
    }elseif($opc == "-"){
        Subtração($numero1, $numero2);
    }elseif($opc == "*"){
        Multiplicação($numero1, $numero2);
    }
    function Adicao($arg1 , $arg2){
        $n1=  $arg1;
        $n2 = $arg2;
        $resultado = $n1 + $n2;
        echo "valor : " .$resultado;
   }
   function Subtração($arg1 , $arg2){
        $n1=  $arg1;
        $n2 = $arg2;
        $resultado = $n1 - $n2;
        echo "valor : " .$resultado;
   }
   function Divisão($arg1 , $arg2){
        $n1=  $arg1;
        $n2 = $arg2;
        $resultado = $n1 / $n2;
        echo "valor : " .$resultado;
   }
   function Multiplicação($arg1 , $arg2){
        $n1=  $arg1;
        $n2 = $arg2;
        $resultado = $n1 * $n2;
        echo "valor : " .$resultado;
   }
    
?>
