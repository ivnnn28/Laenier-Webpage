<?php

$cardValue = 3;

echo "Card value: $cardValue<br>";

if ($cardValue < 1 || $cardValue > 4) {
    echo "Error: Value must be between 1 and 4";
} else {
    switch ($cardValue) {
        case 1:
            echo "Spades";
            break;
        case 2:
            echo "Hearts";
            break;
        case 3:
            echo "Diamonds";
            break;
        case 4:
            echo "Clubs";
            break;
    }
}

?>