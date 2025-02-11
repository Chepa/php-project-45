<?php

namespace Games;

use function cli\line;
use function cli\prompt;
use function Engine\greeting as greeting;

function dcdGame(): bool
{
    $name = greeting();

    line('Find the greatest common divisor of given numbers.');

    $totalGames = 3;
    for ($i = 0; $i < $totalGames; $i++) {
        $first = rand(1, 100);
        $second = rand(1, 100);

        $questionResult = \gmp_gcd($first, $second);
        $answer = prompt('Question: ' . $first . ' ' . $second);
        line('Your answer:' . $answer);

        if ($questionResult != $answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$questionResult'.");
            line("Let's try again, $name!");

            return false;
        }
        line('Correct!');
    }

    line("Congratulations, $name!");

    return true;
}
