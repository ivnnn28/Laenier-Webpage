<?php

function evenOrNot($num1) {
    return ($num1 % 2 == 0);
}

$num1 = 7;

if (evenOrNot($num1)) {
    echo "'Num1' is even";
} else {
    echo "'Num1' is odd";
}


?>