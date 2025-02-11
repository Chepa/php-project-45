<?php

namespace Games;

use function cli\line;
use function cli\prompt;
use function Engine\greeting as greeting;

function dcdGame(): void
{
    $name = greeting();

    line('Find the greatest common divisor of given numbers.');

    $totalGames = 3;
    $successful = 0;
    for ($i = 0; $i < $totalGames; $i++) {
        $first = rand(1, 100);
        $second = rand(1, 100);

        $questionResult = gmp_gcd($first, $second);
        $answer = prompt('Question: ' . $first . ' ' . $second);
        $successful += $questionResult == $answer ? 1 : 0;

        line('Your answer:' . $answer);
        line(
            $answer == $questionResult ? 'Correct!' : "'$answer' is wrong answer ;(. Correct answer was '$questionResult'."
        );
    }

    if ($successful == $totalGames) {
        line("Congratulations, $name!");
    } else {
        line("Let's try again, $name!");
    }
}
