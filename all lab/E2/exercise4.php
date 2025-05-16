<?php

$workingHours = 12000;
$age = 8;
$failures = 30;

echo "Machine working hours: $workingHours<br>";
echo "Machine age: $age years<br>";
echo "Machine failures: $failures per year<br>";

if ($workingHours > 10000 || $age > 7 || $failures > 25) {
    echo "Decision: The machine should be replaced";
} else {
    echo "Decision: The machine does not need replacement yet";
}
?>