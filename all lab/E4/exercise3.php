<?php
function randNumber($min = 0, $max = 1) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

echo "Random float number between 0 and 1: " . number_format(randNumber(), 6) . "<br>";
echo "Random float number between 10 and 20: " . number_format(randNumber(10, 20), 6);
?>