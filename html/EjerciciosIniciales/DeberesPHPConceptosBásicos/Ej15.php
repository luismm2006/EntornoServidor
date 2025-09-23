<?php

    function average($numbers){
        $sum = 0;
        for ($i=0; $i < count($numbers); $i++) { 
            $sum += $numbers[$i];
        }
        return $sum/count($numbers);
    }


    echo average([5,5,10,5,5]);