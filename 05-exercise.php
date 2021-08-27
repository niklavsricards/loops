<?php

$dice = 0;
$totalPoints = 0;

echo "Welcome to Piglet!" . PHP_EOL;

while ($dice !== 1) {
    $dice = rand(1, 6);

    if ($dice === 1) {
        $totalPoints = 0;
        echo "You rolled a {$dice}" . PHP_EOL;
        exit("You got 0 points");
    }

    echo "You rolled a {$dice}" . PHP_EOL;

    $input = readline("Roll again? y/n: ");
    $totalPoints += $dice;
    if ($input === "y") {
        continue;
    } else {
        exit("You got {$totalPoints} points.");
    }
}