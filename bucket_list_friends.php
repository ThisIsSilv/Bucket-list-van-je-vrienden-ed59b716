<?php

$array = array();
echo "Hoeveel mensen wil je toevoegen?" . PHP_EOL;
$aantalM = readline();

if (!is_numeric($aantalM)) {
    echo "thats not a number" . PHP_EOL;
    exit();
}
for ($i = 1; $i <= $aantalM; $i++) {
    echo "Wat is je naam?" . PHP_EOL;
    $naam = readline();
    echo "Wat is je droom" . PHP_EOL;
    $droom = readline();

    $array[$naam] = $droom;
}
foreach ($array as $naam => $droom) {
    echo "De Droom van $naam is $droom" . PHP_EOL;
}
?>