<?php

$NUMBERS = [34, 12, 67, 5, 43, 99, 1];

echo "Original array: " . implode(", ", $NUMBERS) . "<br>";

rsort($NUMBERS);

echo "Sorted array (descending): " . implode(", ", $NUMBERS);

?>