<?php

namespace Games;

use function cli\line;
use function cli\prompt;
use function Engine\greeting as greeting;

function evenGame(): bool
{
    $name = greeting();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $total = 3;
    for ($i = 0; $i < $total; $i++) {
        $number = rand(1, 100);
        $line =  'Question: ' . $number;
        $answer = prompt($line);

        $results = game($number, $answer);

        if ($results) {
            line('Correct!');
        } else {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.");
            $line = sprintf("Let's try again, %s!", $name);
            line($line);

            return false;
        }
    }

    $line = sprintf("Congratulations, %s!", $name);
    line($line);

    return true;
}

function game($number, $answer): bool
{
    if (($number % 2 == 0 && $answer == 'yes') || ($number % 2 !== 0 && $answer == 'no')) {
        return true;
    } else {
        return false;
    }
}