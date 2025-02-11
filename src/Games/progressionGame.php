<?php

namespace Games;

use function cli\line;
use function cli\prompt;
use function Engine\greeting as greeting;

function progressionGame(): bool
{
    $name = greeting();
    line('What number is missing in the progression?');

    $totalGames = 3;

    for ($i = 0; $i < $totalGames; $i++) {
        $step = rand(1, 10);
        $countNumbers = 10;
        $missingPosition = rand(0, $countNumbers - 1);
        $startFrom = rand(1, 100);

        $total = $startFrom;
        $numbers = [$startFrom];

        for ($k = 0; $k < $countNumbers; $k++) {
            $total += $step;
            $numbers[] = $total;
        }

        $result = $numbers[$missingPosition];
        $numbers[$missingPosition] = '..';

        $answer = prompt('Question: ' . implode(' ', $numbers));
        line("Your answer: $answer");

        if ($answer != $result) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("Let's try again, $name!");

            return false;
        }
        line('Correct!');
    }
    line("Congratulations, $name!");

    return true;
}
