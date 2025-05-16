<?php

$number = 7;
$start = 1;
$end = 10;

echo "Multiplication table for $number:<br>";

for ($i = $start; $i <= $end; $i++) {
    $result = $number * $i;
    echo "$number × $i = $result<br>";
}

?>