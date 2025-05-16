<?php

function swapNumbers(&$num1, &$num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

$num1 = 4;
$num2 = 8;

echo "Before swapping: num1 = {$num1}, num2 = {$num2}<br>";

swapNumbers($num1, $num2);

echo "After swapping: num1 = {$num1}, num2 = {$num2}";


?>