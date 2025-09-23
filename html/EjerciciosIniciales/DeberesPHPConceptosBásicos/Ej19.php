<?php

    function calculator($a, $operator, $b){
        $largestNumber = $a>$b?$a:$b;

        switch ($operator) {
            case '+':
                $result = $a+$b;
                break;
            case '-':
                $result = $a-$b;
                break;
            case '*':
                $result = $a*$b;
                break;
            case '/':
                if ($b == 0) {
                    $result = "You can't do division by zero";
                }else {
                    $result = $a/$b;
                }
                break;
            
            default:
                    $result = "Invalid operator";
                break;
        }

        return "The largest number is " . $largestNumber . "<br>" . 
                "The result of $a $operator $b is: " . $result;
    }
    echo calculator(10, '/', 2) . "<br>";
    echo calculator(5, '/', 0);