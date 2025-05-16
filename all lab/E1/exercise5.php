<?php

 
$cmToInch = function($cm) {
    return $cm * 0.39;
};

$cm = 20;
$inch = $cmToInch($cm);


echo "({$cm}) centimeters is (" . number_format($inch, 2) . ") inches.";

?>