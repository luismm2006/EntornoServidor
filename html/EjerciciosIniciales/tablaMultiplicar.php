<?php
    /*function tablaMultiplicar($numero){
        echo "Tabla del $numero" . "<br>";
        for ($i=1; $i < 101; $i++) { 
            echo $numero . "x" . $i . "=" . $numero*$i . " " . "<br>";
        }
    }
    tablaMultiplicar(3);*/

    function parImpar($number){
        $text = "";
        if ($number % 2 == 0) {
            $text = "The number $number is " . " par ";
        }else{
            $text = "The number $number is " . " impar ";
        }
        return $text;
    } 
    echo parImpar(500);
?>