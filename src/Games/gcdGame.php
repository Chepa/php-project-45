<?php

namespace Games;

use function cli\line;
use function cli\prompt;
use function Engine\greeting as greeting;
use function Engine\gcd as gcd;

function dcdGame(): bool
{
    $name = greeting();

    line('Find the greatest common divisor of given numbers.');

    $totalGames = 3;
    for ($i = 0; $i < $totalGames; $i++) {
        $first = rand(1, 100);
        $second = rand(1, 100);

        $questionResult = gcd($first, $second);
        $answer = prompt('Question: ' . $first . ' ' . $second, false, ' `');
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
