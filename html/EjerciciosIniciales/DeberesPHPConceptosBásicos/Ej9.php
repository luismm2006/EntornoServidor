<?php

    function evenOrOdd($number) {
        $type = "";
        if ($number % 2 == 0) {
            $type = "Even";
        } else {
            $type = "Odd";
        }
        return $type;
    }
    echo "The number 7 is: " . evenOrOdd(7) . "<br>";
    echo "The number 8 is: " . evenOrOdd(8) . "<br>";