<?php


$expenses = [
    "Rent" => 800,
    "Groceries" => 300,
    "Utilities" => 150,
    "Transportation" => 100,
    "Entertainment" => 200
];

$totalAmount = 0;
foreach ($expenses as $expense => $amount) {
    $totalAmount += $amount;
}


echo "My biggest expenses were:<br>";
foreach ($expenses as $expense => $amount) {
    echo "- {$expense}: \${$amount}<br>";
}
echo "Total amount of expenses: \${$totalAmount}";
?>