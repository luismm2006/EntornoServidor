<?php

    function printString($string){
        $letters = str_split($string);
        foreach ($letters as $caracter) {
            echo $caracter . "<br>";
        }
    }
    printString("hola");