<?php
    function positiveZeroNegative($number){
        $type = "";
        if($number>0){
            $type = "Positive";
        }elseif ($number<0) {
            $type = "Negative";
        }else{
            $type = "Zero";
        }
        return $type;
    }
    echo positiveZeroNegative(10) . "<br>";
    echo positiveZeroNegative(-10) . "<br>";
    echo positiveZeroNegative(0) . "<br>";
