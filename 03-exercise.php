<?php

$firstWord = readline("Enter first word: ");
$secondWord = readline("Enter second word: ");

$numberOfDots = 30 - strlen($firstWord) - strlen($secondWord);

var_dump($numberOfDots);

echo $firstWord;
for ($i = 0; $i < $numberOfDots; $i++) {
    echo ".";
}
echo $secondWord;