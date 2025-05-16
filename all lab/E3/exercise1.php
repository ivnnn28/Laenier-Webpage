<?php

$price = 100;
$vat = 21;

function calculateVat($price, $vat) {
    return $price + $vat;
}

$calculatedPrice = calculateVat($price, $vat);

echo "Price is: {$price}, Vat is: {$vat}, Total price is: {$calculatedPrice}";
?>