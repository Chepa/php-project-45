<?php

namespace Engine;

use KhanhIceTea\Twigeval\Calculator as Calculator;
use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");

    return $name;
}

function expression($first, $second, $operation): string
{
    $calculator = new Calculator(null);

    return $calculator->calculate("$first $operation $second");
}

function isPrime($num): bool
{
    $num = (int)$num;

    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function gcd($a, $b): int
{
    $smallVal = min($a, $b);
    $gcd = 1;

    for ($i = 1; $i <= $smallVal; $i++) {
        if ($a % $i === 0 && $b % $i === 0) {
            $gcd = $i;
        }
    }

    return $gcd;
}
