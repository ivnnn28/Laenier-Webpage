<?php
$onlyNumbers = [42, 15, 87, 3, 99, 21, 6];

echo "Array: " . implode(", ", $onlyNumbers) . "<br>";
echo "The lowest value is '" . min($onlyNumbers) . "' and the highest value is '" . max($onlyNumbers) . "'";