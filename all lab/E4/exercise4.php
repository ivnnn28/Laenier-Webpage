<?php
$str = "The Quick Brown Fox Jumps Over The Lazy Dog. THIS IS A TEST!";

function lowercaseCheck($text) {
    return strtolower($text);
}

echo "Original text: {$str}<br>";
echo "Lowercase text: " . lowercaseCheck($str);

?>