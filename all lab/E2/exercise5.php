<?php

$year = 2024;

echo "Year: $year<br>";

if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "Result: $year is a leap year";
} else {
    echo "Result: $year is not a leap year";
}

?>