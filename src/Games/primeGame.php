<?php

namespace Games;

use function cli\line;
use function cli\prompt;
use function Engine\greeting as greeting;
use function Engine\isPrime as isPrime;

function primeGame(): void
{
    $name = greeting();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    $totalGames = 3;
    $successful = 0;
    for ($i = 0; $i < $totalGames; $i++) {
        $number = rand(1, 100);
        $result = isPrime($number) ? 'yes' : 'no';
        $answer = prompt('Question: ' . $number, false, ': ');
        line('Your answer: ' . $answer);

        if ($result == $answer) {
            $successful++;
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
        }
    }

    if ($successful == $totalGames) {
        line("Congratulations, $name!");
    } else {
        line("Let's try again, $name!");
    }
}