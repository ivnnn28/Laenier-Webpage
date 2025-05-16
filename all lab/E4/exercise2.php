<?php
$birthdate = "2024-12-25"; // Example birthday
$currentDate = date("Y-m-d");
$birthdayThisYear = date("Y") . substr($birthdate, 4);

// If this year's birthday has passed, calculate for next year
if (strtotime($birthdayThisYear) < strtotime($currentDate)) {
    $birthdayThisYear = (date("Y") + 1) . substr($birthdate, 4);
}

$daysRemaining = ceil((strtotime($birthdayThisYear) - strtotime($currentDate)) / (60 * 60 * 24));

echo "Current date: {$currentDate}<br>";
echo "Birthday date: {$birthdate}<br>";
echo "Days until birthday: {$daysRemaining}";
?>