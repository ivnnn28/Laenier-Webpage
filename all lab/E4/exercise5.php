<?php
function searchText($str, $punctuation) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos($punctuation, $str[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}

$text = "Hi, Im Laenier C. molina . 20 years old, BSIT, thats all.";
$punctuations = ".,;!?";

echo "{$text}<br><br>";
echo "The text has '" . searchText($text, $punctuations) . "' {$punctuations} punctuations";
?>