<?php

namespace Games;

use function cli\line;
use function cli\prompt;
use function Engine\greeting as greeting;
use function Engine\expression as expression;

function calcGame(): bool
{
    $operations = ['+', '-', '*'];

    $name = greeting();
    line('What is the result of the expression?');

    foreach ($operations as $operation) {
        $first = rand(1, 100);
        $second = rand(1, 100);

        $result = expression($first, $second, $operation);
        $line = "Question: $first $operation $second";

        line($line);
        $answer = prompt('Your answer');

        if ($answer == $result) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'");
            line("Let's try again, $name!");

            return false;
        }
    }

    return true;
}

