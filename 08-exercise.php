<?php

$min = (int) readline("Min? ");
$max = (int) readline("Max? ");

for ($i = $min; $i <= $max; $i++) {
    $start = $i;
    for ($j = $min; $j <= $max; $j++) {
        echo $start;
        if ($start == $max) {
            $start = $min;
        } else {
            $start++;
        }
    }
    echo PHP_EOL;
}