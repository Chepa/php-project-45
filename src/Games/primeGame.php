<?php

namespace Games;

use function cli\line;
use function cli\prompt;
use function Engine\greeting as greeting;
use function Engine\isPrime as isPrime;

function primeGame(): bool
{
    $name = greeting();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    $totalGames = 3;
    for ($i = 0; $i < $totalGames; $i++) {
        $number = rand(1, 100);
        $result = isPrime($number) ? 'yes' : 'no';
        $answer = prompt('Question: ' . $number);
        line('Your answer: ' . $answer);

        if ($result != $answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("Let's try again, $name!");

            return false;
        }
    }

    line("Congratulations, $name!");
    line('Correct!');

    return true;
}