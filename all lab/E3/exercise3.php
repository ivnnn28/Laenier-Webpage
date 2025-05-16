<?php

$num1 = 10;
$num2 = 5;

function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

function subtractNumbers($num1, $num2) {
    return $num1 - $num2;
}

function multiplyNumbers($num1, $num2) {
    return $num1 * $num2;
}

function divideNumbers($num1, $num2) {
    if ($num2 == 0) {
        return "Cannot divide by zero";
    }
    return $num1 / $num2;
}

echo "Addition of '{$num1}' and '{$num2}' is '" . addNumbers($num1, $num2) . "'<br>";
echo "Subtraction of '{$num1}' and '{$num2}' is '" . subtractNumbers($num1, $num2) . "'<br>";
echo "Multiplicity of '{$num1}' and '{$num2}' is '" . multiplyNumbers($num1, $num2) . "'<br>";
echo "Division of '{$num1}' and '{$num2}' is '" . divideNumbers($num1, $num2) . "'";

?>