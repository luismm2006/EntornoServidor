<?php
    function celsiusToFahrenheit($celsius) {
        $fahrenheit = ($celsius * 9/5) + 32;
        return $fahrenheit;
    }

    echo celsiusToFahrenheit(0). "<br>";    // 32
    echo celsiusToFahrenheit(100);  // 212