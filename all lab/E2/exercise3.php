<?php

$score = 78;

echo "Student score: $score points<br>";

if ($score >= 90 && $score <= 100) {
    $grade = 'A';
} elseif ($score >= 80 && $score <= 89) {
    $grade = 'B';
} elseif ($score >= 70 && $score <= 79) {
    $grade = 'C';
} elseif ($score >= 60 && $score <= 69) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo "Grade: $grade<br>";

if ($grade == 'A' || $grade == 'B' || $grade == 'C') {
    echo "Result: Student passed the exam";
} else {
    echo "Result: Student did not pass the exam";
}


?>