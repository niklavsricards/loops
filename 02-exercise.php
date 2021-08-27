<?php

$sum = 1;
$base = (int) readline("Enter the base as i: ");
$exponent = (int) readline("Enter the exponent as n: ");

for ($i = 0; $i < $exponent; $i++) {
    $sum *= $base;
}

echo $sum;