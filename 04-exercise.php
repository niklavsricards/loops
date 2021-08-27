<?php

$input = (int) readline('Enter an integer to which you want to print numbers: ');

for ($i = 1; $i < $input; $i++) {
    $stringToPrint = '';
    if ($i % 3 == 0 || $i % 5 == 0) {
        if ($i % 3 == 0) {
            $stringToPrint = $stringToPrint . 'Fizz';
        }
        if ($i % 5 == 0) {
            $stringToPrint = $stringToPrint . 'Buzz';
        }
        echo $stringToPrint . ' ';
    } else {
        echo $i . ' ';
    }
    if ($i % 20 == 0) {
        echo PHP_EOL;
    }
}