<?php

$desiredSum = (int) readline("Desired sum: ");
$randomSum = 0;

while ($randomSum !== $desiredSum) {
    $randomSum = 0;
    $fistNumber = rand(1, 6);
    $secondNumber = rand(1, 6);

    $randomSum = $fistNumber + $secondNumber;

    echo "{$fistNumber} and {$secondNumber} = {$randomSum}" . PHP_EOL;
}
