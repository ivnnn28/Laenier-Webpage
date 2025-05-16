<?php

function isPrime($num1) {
    if ($num1 <= 1) {
        return false;
    }
    
    if ($num1 <= 3) {
        return true;
    }
    
    if ($num1 % 2 == 0 || $num1 % 3 == 0) {
        return false;
    }
    
    $i = 5;
    while ($i * $i <= $num1) {
        if ($num1 % $i == 0 || $num1 % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    
    return true;
}

$num1 = 17;

if (isPrime($num1)) {
    echo "'{$num1}' is a prime number";
} else {
    echo "'{$num1}' is not a prime number";
}

?>