<?php

include 'vendor/autoload.php';

use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Games!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
line('Answer "yes" if the number is even, otherwise answer "no".');
$number = rand(1, 100);
$answer = prompt('Question: ' . $number);

if (($number % 2 == 0 && $answer == 'yes') || ($number % 2 !== 0 && $answer == 'no')) {
    line('Correct!');
} else {
    line("'yes' is wrong answer ;(. Correct answer was 'no'.");
    line("Let's try again, %s!", $name);
}
