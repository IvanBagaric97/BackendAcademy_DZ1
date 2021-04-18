<?php

function is_prime($n): bool{
    for($x=2; $x<$n; $x++){
        if($n % $x == 0){
            return false;
        }
    }
    return true;
}


function Fibonacci($n){

    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1 . ",";
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}

function pi_aprox(): float|int{
    $theValue = 10000; // the max
    $bottom = 1;
    $pi = 0;
    for ($i = 1; $i < $theValue; $i++) {
        if ($i % 2 == 1) {
            $pi += 4 / $bottom;
        } else {
            $pi -= 4 / $bottom;
        }
        $bottom += 2;
    }
    return $pi;
}