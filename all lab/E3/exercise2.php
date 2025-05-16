<?php

$year = 2024;

function isLeapYear($year) {
    return (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0));
}

if (isLeapYear($year)) {
    echo "'{$year}' is a leap year";
} else {
    echo "'{$year}' is not a leap year";
}

?>