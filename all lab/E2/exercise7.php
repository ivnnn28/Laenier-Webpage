<?php

echo "Fibonacci series from 0 to 50:<br>";

$first = 0;
$second = 1;

echo "$first, $second";

while ($first + $second <= 50) {
    $next = $first + $second;
    echo ", $next";
    $first = $second;
    $second = $next;
}

?>