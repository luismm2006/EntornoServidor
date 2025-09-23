<?php

    function greater($a, $b) {
        $greater = 0;
        if ($a > $b) {
            $greater = $a;
        } else {
            $greater = $b;
        }
        return $greater;
    }
    echo "The greater number between 15 and 27 is: " . greater(15, 27) . "<br>";