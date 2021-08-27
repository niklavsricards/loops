<?php

$rows = 5;
$rowLength = 32;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rowLength; $j++) {
        if ($j < $rowLength / 2) {
            echo "/";
        } else {
            echo "\\";
        }
    }
    echo PHP_EOL;
}